<?php

$jumbotron = get_section_data('JUMBOTRON');
$about = get_section_data('ABOUT');

$site_name = get_setting_value('_site_name');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Home -->
    <link rel="stylesheet" href="../css/stylehome.css">

    <!-- fontawessome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

    <!-- animation link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>PortoFolio</title>
  </head>
  <body>
<!-- navigasi -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:rgb(143, 188, 144);">
<a class="navbar-brand" href="#">
<i class="fa-solid fa-user"></i>

    <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> -->
  </a>
  <a class="navbar-brand" href="#"><b>NjwnExProtech</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
    </li>
    </ul>
    <span class="navbar-text">
      PortoFolio Web Profile
    </span>
  </div>
</nav>
  <!-- tutup navigasi -->

    <!-- jumbotoron -->
    <div class="jumbotron text-center" style="background-color:#F9ED69;">
    <img src="" alt="profile" class="rounded-circle" >
  <h3 class="display-4" data-aos="fade-right">{{$jumbotron->title}}</h3>
      <p class="lead">Student - Programing - Pemula </p>
  </p>
</div>
    <!-- tutup jumbotoron -->

      <!-- About -->
  <div id="about">
    <div class="container">
      <div class="row justify-content-center fs-8">
        <h3>About Me</h3>
      </div>
      <div class="row justify-content-center  ">
        <div class="col-md-4">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus dolor temporibus voluptatum voluptas
            nemo fuga iure quae libero tenetur. Repudiandae fuga excepturi neque inventore ullam?</p>
        </div>
        <div class="col-md-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ut ea deserunt animi suscipit officia architecto
          sequi beatae dolorem, quod voluptate perferendis nisi. Amet, quod?
        </div>
      </div>
    </div>
  </div>

  <!-- tutup about -->

<!-- Project -->
<div id="project">
    <div class="container">
      <div class="row justify-content-center  mb-4">
        <h3>My Project</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4  mb-5">
          <!-- card1 -->
          <div class="card text-white bg-secondary mb-3" style="max-width: 26rem;"">
            <img src="../image/html 5 gambar.png" class="gambar">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!-- card1end -->
        </div>
        <div class="col-md-4  mb-5">
          <!-- card2 -->
          <div class="card">
            <img src="../image/nuxtjs.png" class="gambar">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!-- card2end -->
        </div>
        <div class="col-md-4  mb-5">
          <!-- card3 -->
          <div class="card">
            <img src="../image/doraemon1.jpg" class="gambar">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!-- card3end -->
        </div>
        <div class="col-md-4 mb-5">
          <!-- card4 -->
          <div class="card">
            <img src="../image/doraemon3.jpg" class="gambar">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!-- card4end -->


        </div>
        <div class="col-md-4  mb-5">
        <div class="card border-dark mb-3" style="max-width: 26rem;">
            <img src="../image/doraemon3.jpg" class="gambar">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>

            </div>
        </div>
        <!-- card 5 end -->
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
<!-- tutup Project -->
<!-- contact -->
<section id="contact">
        <div class="container  pt-5">
            <div class="row justify-content-center">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></form>
                </div>
            </div>
        </div>
    </section>    
    <!-- tutupcontact -->

    <!-- footer -->
<footer style="background-color:#f2ff00ce;">
    <div class="container" >
        <div class="row" text-center>
            <div class="col md-4">
            <button type="button" class="btn btn-primary"btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-github" style="color: #000000;"></i>
            </button>
            <button type="button" class="btn btn-primary"btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-instagram" style="color: #000000;"></i>
            </button>
            <button type="button" class="btn btn-primary"btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-facebook" style="color: #000000;"></i>
            </button>
            <button type="button" class="btn btn-primary"btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-youtube" style="color: #000000;"></i>
            </button>
            </div>
            <div class="col-mb-4">
              <h6 class=text-uppercase fw-bold>
              <i class="far fa-gem"></i> Company Name
              </h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quod vero neque facere nesciunt magni nulla, quidem cum minus accusantium quaerat nam impedit. Tenetur quo inventore, suscipit minima perspiciatis officia?</p>
            </div>
        </div>
    </div>

    <div class="text-center text-white p-3" style="background-color:grey;">
    @2023 Copyright <a class="text-white" href="#">NajwanLabs</a>
  </div>
</footer>
    <!-- tutup fuuter<-->
     
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- tutup animasi cdn -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>