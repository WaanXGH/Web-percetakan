<?php


$jumbotron = get_section_data('JUMBOTRON');
$about = get_section_data('ABOUT');
$site_name = get_setting_value('_site_name');
$site_description = get_setting_value('_site_description');
$location =  get_setting_value('location');

$project = get_project();

$youtube = get_setting_value('_youtube');
$tiktok = get_setting_value('_tiktok');
$whatsapp = get_setting_value('_whatsapp');
$github = get_setting_value('_github');
$instagram = get_setting_value('_instagram');


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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto" style="margin-left:1100px;">
        <li class="nav-item ">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- tutup navigasi -->

  <!-- jumbotron -->
  <div class="jumbotron text-center" style="height: 750px; background-color:#F9ED69; ">
    <img src="../image/aetherasli.jpeg" alt="profile" class="rounded-circle" style=" margin-top:70px;" >
    <h3 class="display-4" data-aos="fade-right"></h3>
    <p class="lead">Student - Programing - Pemula </p>
    </p>
  </div>
  <!-- tutup jumbotron -->

  <!-- About -->
  <!-- about -->
  <section id="about">
    <div class="container">
      <div class="row justify-content-center">
        <h2>About Me</h2>
      </div>
      <div class="row mb-3">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{Storage::url($jumbotron->thumbnail)}}" class="img-fluid rounded-start" alt="aether">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-text">{!! strip_tags ($jumbotron->content) !!}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- tutupabout -->
<?php

$i = 1;

?>




  <!-- Project -->
  <div id="project">
    <div class="container">
      <div class="row justify-content-center  mb-4">
        <h3>My Project</h3>
      </div>
      <div class="row justify-content-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1200">
      @foreach ($project as $item)
        <div class="col-md-4  mb-5 pb-3">
          <div class="card" style="width: 26rem;"">
            <img src="{{ Storage::url($item->thumbnail) }}" class="card-img-top " alt= "image-project" height="200" width="200">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <p class="card-text">{!! strip_tags($item->content) !!}</p>
              <a href="{{ $item->link}}" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div>
        @endforeach
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
    <div class="container">
      <div class="row" text-center>
        <div class="col md-4">
          <a href="{{$github}}" target="_blank" class="btn btn-primary" btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-github" style="color: #000000;"></i>
          </a>
          <a href="{{$instagram}}" target="_blank" class="btn btn-primary" btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-instagram" style="color: #000000;"></i>
          </a>
          <a href="{{$whatsapp}}"  target="_blank" class="btn btn-primary" btn-floating mx-2 style="background-color:#f2ff00ce;">
            <i class="fa-brands fa-whatsapp" style="color: #000000;"></i>
          </a>
          <div class="col-mb-4">
            <p>{!! strip_tags ($location) !!}</p>
          </div>
        </div>
        <div class="col-mb-4">
          <h6 class=text-uppercase fw-bold>
            <i class="far fa-gem"></i> {{$site_name}}
          </h6>
          <p>{{$site_description}}</p>

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