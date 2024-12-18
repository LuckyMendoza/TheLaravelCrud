@extends('layout.app')



@error('error')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<div class="container">
    <div class="text">
        Edit Student Information
    </div>

    <form method="POST" action="{{ route('student.update', $student->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="firstName" value="{{ $student->firstName }}"
                    class="@error('firstName') is-invalid @enderror">
                <div class="underline"></div>
                <label for="firstName">First Name</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="lastName" value="{{ $student->lastName }}"
                    class="@error('lastName') is-invalid @enderror">
                <div class="underline"></div>
                <label for="lastName">Last Name</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="address" value="{{ $student->address }}"
                    class="@error('address') is-invalid @enderror">
                <div class="underline"></div>
                <label for="address">Address</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="email" name="email" value="{{ $student->email }}"
                    class="@error('email') is-invalid @enderror">
                <div class="underline"></div>
                <label for="email">Email Address</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="file" name="avatar" class="@error('avatar') is-invalid @enderror">
                <div class="underline"></div>
                <label for="avatar">Profile Image</label>
            </div>
        </div>
        @if ($student->avatar)
        <div class="form-row">
            <img src="{{ asset('storage/' . $student->avatar) }}" alt="Profile Image" width="100">
        </div>
        @endif


        <div class="form-row">
            <div class="input-data textarea">
                <textarea name="message" rows="8" cols="80"
                    class="@error('message') is-invalid @enderror">{{ $student->message }}</textarea>
                <div class="underline"></div>
                <label for="message">Write your message</label>
            </div>
        </div>


        <div class="form-row submit-btn d-flex justify-content-center">
            <div class="input-data">
                <div class="inner"></div>
                <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>