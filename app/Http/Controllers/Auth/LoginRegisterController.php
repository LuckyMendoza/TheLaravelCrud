<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;

class LoginRegisterController extends Controller
{

    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout' ]);
        $this->middleware('auth')->only('logout', 'home');
        $this->middleware('verified')->only('home');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = User::create(['name' => $googleUser->name, 
            'email' => $googleUser->email, 
            'password' => Hash::make(mt_rand(100000, 999999)) // Using mt_rand instead of rand
        ]);
        }

        Auth::login($user);

        return view('auth.home');
        
   
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

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        event(new Registered($user));

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('verification.notice');
    }


    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('auth.home');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
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
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
        ->withSuccess('You have logged out successfully!');

     }
}
