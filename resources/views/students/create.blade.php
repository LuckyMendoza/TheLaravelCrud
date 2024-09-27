@extends('layout.app')

<x-alert />


<div class="container">  
    <div class="text">
        Create Laravel Crud
    </div>

    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <div class="form-row">
            <!-- First Name -->
            <div class="input-data">
                <input type="text" name="firstName" value="{{ old('firstName') }}"
                    class="@error('firstName') is-invalid @enderror">
                <div class="underline"></div>
                <label for="firstName">First Name</label>
                @error('firstName')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <!-- Last Name -->
            <div class="input-data">
                <input type="text" name="lastName" value="{{ old('lastName') }}"
                    class="@error('lastName') is-invalid @enderror">
                <div class="underline"></div>
                <label for="lastName">Last Name</label>
                @error('lastName')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <!-- Address -->
            <div class="input-data">
                <input type="text" name="address" value="{{ old('address') }}"
                    class="@error('address') is-invalid @enderror">
                <div class="underline"></div>
                <label for="address">Address</label>
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="input-data">
                <input type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                <div class="underline"></div>
                <label for="email">Email Address</label>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        
        <div class="form-row">
            <!-- Message -->
            <div class="input-data textarea">
                <textarea name="message" rows="8" cols="80"
                    class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                <br />
                <div class="underline"></div>
                <label for="message">Write your message</label>
                @error('message')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row submit-btn d-flex justify-content-center">
            <div class="input-data">
                <div class="inner"></div>
                <button type="submit" value="submit">Submit</button>
            </div>
        </div>
</div>
</form>
</div>

