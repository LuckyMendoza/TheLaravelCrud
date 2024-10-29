<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 User Registration with Email Verification - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <style>
  .btn-165 {
    padding: 10px 25px;
    font-size: 14px;
    font-weight: 700;
    text-align: center;
    vertical-align: middle;
    border-radius: 0.5rem;
    border: 1px solid #bebebe;
    gap: 20px;
    color: #414141;
    background: #fff;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
    text-decoration: none;
    user-select: none;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin-left: 4rem;
    margin-top: 2rem;
}

.btn-165 svg {
    height: 24px;
}

.btn-165:hover {
    border: solid 1px #464545;
}

.btn-165:active {
    margin-top: 2px;
}

/*** disabled style ***/
.btn-165[disabled] {
    pointer-events: none;
    opacity: .65;
    color: #7e7e7e;
    background: #dcdcdc;
    box-shadow: none;
    text-shadow: none;
}
    </style>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}">Custom Register with Email Verification</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    <div class="container">
        @yield('content')
        <div class="row justify-content-center text-center mt-3">
            {{-- <div class="col-md-12">
                <p>Back to Tutorial: 
                    <a href="https://www.allphptricks.com/laravel-user-registration-with-email-verification/"><strong>Tutorial Link</strong></a>
                </p>
                <p>
                    For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
                </p>
            </div> --}}
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>