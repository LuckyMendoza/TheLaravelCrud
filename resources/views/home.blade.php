<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
  <link rel="stylesheet" href="{{asset('/home/style.css')}}">

</head>

<body>   
  <!-- partial:index.partial.html  -->
  <section>
    <div class="container">
      <div class="row justify-content-center">


        <div class="class=col-12 col-md-8">
          <div class="jelly-card">
            <div class="card py-3 ">

              <div class="row">
                <div class="col-10 col-md-4 col-lg-3 jelly-bloc text-center text-md-start">
                  <img src="https://nsm09.casimages.com/img/2021/07/28//21072811131525998217508884.png"
                    class="card-img-top card-pic slowfloat2s" alt="meduse">
                </div>
                <div class="col-12 col-md-8 col-lg-8 d-flex flex-column align-items-center justify-content-center ">
                  <div class="card-body  ">
                    <h5 class="card-title text-center">
                      From Zero to Hero
                    </h5>
                    <div class="line"></div>
                    <p class="card-text">
                      "Build a Solid Laravel Foundation: Learn the essentials—CRUD functionality, user registration,
                      Google login, and dashboards. Elevate your skills and start creating powerful, user-friendly
                      applications with ease."
                    </p> 
                    <i class="fas fa-disease slowfloat3s"></i>

                    <!-- Centered Button with Custom Width -->
                    <div class="mt-4 d-flex justify-content-center">
                      <a href="{{route('login')}}" class="btn btn-primary custom-btn-width">Lets get Started</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

==
      </div>
    </div>
  </section>
  <!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>