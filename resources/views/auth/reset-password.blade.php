@extends('auth.layouts')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Reset Password</div>
            <div class="card-body">

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required
                            autofocus>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" class="form-control" required>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection