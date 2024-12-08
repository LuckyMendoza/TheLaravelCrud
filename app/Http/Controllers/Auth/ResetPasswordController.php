<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest'); // Only allow guests (users who are not logged in)
    }

    /**
     * Show the password reset form with the token.
     */
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]); // Pass the token to the view
    }

    /**
     * Handle the password reset process.
     
     */
    public function reset(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required',
        ]);
    
        // Attempt to reset the user's password
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) { // use $request inside the closure
                $user->forceFill([
                    'password' => Hash::make($password), // Hash and set the new password
                ])->save();
    
                // Optionally log out the user after resetting their password
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
            }
        );
    
        // Return an appropriate response
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->withSuccess('Password Updated! Login To Continue')
            : back()->withErrors(['email' => [__($status)]]);
    }
}
