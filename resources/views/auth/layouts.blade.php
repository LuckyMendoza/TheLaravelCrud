<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/loginform/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/loginform/css/otp.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma/bulma.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

    <x-login-alert />
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('/assets/loginform/js/script.js')}}"></script>
    <script src="{{asset('/assets/loginform/js/otp.js')}}"></script>
</body>

</html>