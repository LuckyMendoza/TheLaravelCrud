<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest'); // Only allow guests (users who are not logged in)
    }

    /**
     * Show the form to request a password reset link.
     */
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password'); // View for requesting the reset link
    }

    /**
     * Handle the sending of the password reset link.
     */
    public function sendResetLinkEmail(Request $request)
    {
        // Validate the request
        $request->validate(['email' => 'required|email']);

        // Attempt to send the password reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Return an appropriate response
        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}
