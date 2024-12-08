<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EmailOTP;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class LoginRegisterController extends Controller
{

    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        // $this->middleware('guest')->except(['logout']);
        // $this->middleware('auth')->only('logout', 'home');
        // $this->middleware('verified')->only('home');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => Hash::make(mt_rand(100000, 999999)) // Using mt_rand instead of rand
            ]);
        }

        Auth::login($user);

        return redirect()->route('student.index')->with('success', 'Successfully Login');
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */



    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:250',
                'email' => 'required|string|email:rfc,dns|max:250|unique:users,email',
                'password' => 'required|string|min:8|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            // Trigger the OTP verification process
            $this->sendOTP($user);

            event(new Registered($user));

            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);
            $request->session()->regenerate();

            return redirect()->route('verification.notice');
        } catch (\Throwable $th) {
            // Log the exception for debugging
            Log::error('Error storing user: ', ['error' => $th->getMessage()]);

            return redirect()->back()->with('error', 'Something went wrong while registering. Please try again!');
        }
    }

    public function sendOTP(User $user)
    {
        try {
            // Generate 6-digit OTP
            $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

            // Save OTP to database
            EmailOTP::updateOrCreate(
                ['email' => $user->email],
                [
                    'otp' => $otp,
                    'expires_at' => Carbon::now()->addMinutes(5)
                ]
            );

            // Send OTP via email
            Mail::send('auth.otp', ['otp' => $otp], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Email Verification OTP');
            });

            return back()->withSuccess('OTP has been sent to your email address.');
        } catch (\Throwable $th) {
            // Log the exception for debugging
            Log::error('Error sending OTP: ', ['error' => $th->getMessage()]);

            return redirect()->back()->with('error', 'Failed to send OTP. Please try again later.');
        }
    }


    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Respons                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         e
     */
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('student.index')->with('success', 'Successfully Login');
            }

            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong during the login process!');
        }
    }

    /**
     * Display a home to authenticated & verified users.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        return view('auth.home');
    }

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        $request->session()->regenerateToken();
        return redirect()->route('home')
            ->withSuccess('You have logged out successfully!');
    }
}
