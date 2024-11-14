@extends('auth.layouts')
@section('title', 'Verify Email')



<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif

    <header>Email Verification</header>

    <div class="verification-text">
        Please enter the 6-digit code sent to your email address
    </div>

    <form action="{{ route('verification.verify') }}" method="post">
        @csrf
        <div class="otp-container">
            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]" inputmode="numeric">
            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]" inputmode="numeric">
            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]" inputmode="numeric">
            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]" inputmode="numeric">
            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]" inputmode="numeric">
            <input type="text" class="otp-input" maxlength="1" pattern="[0-9]" inputmode="numeric">
            <input type="hidden" name="otp" id="otp-hidden">
        </div>

        <div class="button">
            <div class="inner"></div>
            <button type="submit">Verify OTP</button>
        </div>
    </form>

    <div class="verification-text">
        Didn't receive the code?
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="resend-link">
                Resend Code
            </button>
        </form>
    </div>
</div>