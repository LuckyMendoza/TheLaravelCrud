<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailOTP;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\LoginRegisterController;

class VerificationController extends Controller
{

   protected $loginRegisterController;


   public function __construct(LoginRegisterController $loginRegisterController)
   {
      $this->middleware('auth');
      $this->middleware('throttle:6,1')->only('verify', 'resend');
      $this->loginRegisterController = $loginRegisterController;
   }

   /**
    * Display OTP verification form
    */
   public function notice(Request $request)
   {
      return $request->user()->hasVerifiedEmail()
         ? view('auth.home')
         : view('auth.verify-email');
   }

  
   /**
    * Verify OTP
    */
   public function verify(Request $request)
   {
      $request->validate([
         'otp' => 'required|digits:6'
      ]);

      $user = $request->user();
      $emailOTP = EmailOTP::where('email', $user->email)
         ->where('otp', $request->otp)
         ->where('expires_at', '>', Carbon::now())
         ->first();

      if (!$emailOTP) {
         return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
      }

      // Mark email as verified
      $user->markEmailAsVerified();

      // Delete used OTP
      $emailOTP->delete();

      return view('auth.home');
   }

   /**
    * Resend OTP
    */
   // public function resend(Request $request)
   // {
   //    return $this->sendOTP($request);
   // }
   public function resend(Request $request)
   {
       $user = $request->user();
       $this->loginRegisterController->sendOTP($user);
       return back()->withSuccess('OTP has been resent to your email address.');
   }
}
