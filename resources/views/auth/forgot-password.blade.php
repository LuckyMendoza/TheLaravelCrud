@extends('auth.layouts')

@section('content')


<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Send passsword link</div>
            <div class="card-body">


                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required
                            autofocus>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection