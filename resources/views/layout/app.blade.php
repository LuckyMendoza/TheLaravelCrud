<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <title>Laravel Crud </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{asset('/dist/style.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/table.css')}}" />
  
  {{--
  <link rel="stylesheet" href="sweetalert2.min.css"> --}}
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma/bulma.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body>
  <style>
    .title {
      position: absolute;
      top: 30px;
      /* Adjust this value to position the title closer or further from the top */
      left: 50%;
      transform: translateX(-50%);
      font-size: 41px;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      background: -webkit-linear-gradient(right, #56d8e4, #2f2235, #e6c018, #e00d5e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-align: center;
      /* Center the text horizontally */
    
    }
  </style>




  <div class="title">
    @yield('title')
  </div>



  <x-alert />

  

  <script src="{{asset('assets/viewprofile.js')}}" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
  </script>
</body>


</html>