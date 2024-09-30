<?php

$whatsapp = get_setting_value('_whatsapp');
$github = get_setting_value('_github');
$judul = get_setting_value('_site_name');
$instagram = get_setting_value('_instagram');
$lokasi = get_setting_value('location');
$email = get_setting_value('_email');
$nomortelp = get_setting_value('_Notelp');
$description = get_setting_value('_description');

$testimonis = get_testimonis();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Percetakkan Online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">{{$judul}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Tentang </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
              <li><a class="nav-link scrollto" href="#team">Tim</a></li>
              <li><a class="nav-link scrollto" href="#testimonials">Testimoni</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Pelayanan</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Selamat Datang Di Wann Print!!!</h1>
            <h2>Dapatkan Hasil Cetak Berkualitas Tinggi, cepat dan Harga Terjangkau!</h2>
            <a href="" class="btn-get-started scrollto">Mulai Belanja</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>Pelajari Tentang Kami</h3>
              <p class="fst-italic">
                <p>{{$description}}</p>
                Apa sih Kelebihan dari Waan Print:
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Proses Cepat </li>
                <li><i class="bi bi-check-circle"></i> Tahan Lama</li>
                <li><i class="bi bi-check-circle"></i> Kualitas Tinta Bagus</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Desain Dalam Web</h4>
                  <p>Membuat Desain menjadi lebih praktis</p>
                </a>
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Datang Langsung ke toko</h4>
                  <p>Langsung Request Ke yang Ahlinya</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid small-25">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid small-25">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Pelayanan</h2>
      <p>Kami Mempunyai Alur Pengerjaan Sebagai Berikut</p>
    </div>

    <div class="row justify-content-center"> <!-- Added justify-content-center -->
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
        <div class="icon-box icon-box-pink">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href="">Customer Menyerahan Desain</a></h4>
          <p class="description">Pihak Customer Menyerahkan Desain Yang dibuat, memilih jenis produk yang akan dicetak dan memilih ekspedisi </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box icon-box-green">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href="">Customer menunggu</a></h4>
          <p class="description">Customer Menunggu Hasil Jenis produk yang dicetak yang akan diberi pemberitahuan via <b>whatsapp atau email</b></p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box icon-box-blue">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href="">Produk selesai dicetak</a></h4>
          <p class="description">Produsen mengabarkan Client bahwa desain sudah dicetak dan siap dikirim</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Kami Mempunyai Dokumentasi sebagai berikut </p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>

              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= TESTIMONI SECTION ======= -->
    <section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Testimoni dari berbagai</p>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        @foreach($testimonis as $testimonial)
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $testimonial->quote }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('storage/' . $testimonial->thumbnail) }}" class="testimonial-img" alt="{{ $testimonial->name }}">
              <h3>{{ $testimonial->name }}</h3>
              <h4>{{ $testimonial->position }}</h4>
            </div>
          </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>List Desain Harga dengan Harga terjangkau</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-8">
            <div class="box" data-aos="zoom-in">
              <h3>Banner</h3>
              <h4><sup>Rp</sup>15.000<span> /Pcs </span></h4>
              <ul>
                <!-- <li class="na">Gratis Ongkir</li> -->
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Poster</h3>
              <h4><sup>Rp</sup>50.000<span> / pcs</span></h4>
              <ul>
                <!-- <li class="na">Massa ultricies mi</li> -->
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Spanduk</h3>
              <h4><sup>Rp</sup>40.000<span> / pcs</span></h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Beli Sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>{{$lokasi}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$email}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>hub:</h4>
                <p>{{$nomortelp}}</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.295845522371!2d106.98947047589252!3d-6.355736893634236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c22161d4051%3A0x7a0a35b288779341!2sSMKN%202%20Kota%20Bekasi!5e0!3m2!1sid!2sid!4v1701225799240!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="/komentar" method="POST" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="nama" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Tentang</label>
                <input type="text" class="form-control" name="tentang" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="isipesan" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Sudah Terkirim. Terimakasih</div>
              </div>
              <div class="text-center"><button type="submit" name='submit'>Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>{{$judul}}</h3>
              <p>
                {{$lokasi}} <br>
                <!-- <br><br> -->
                <strong>Phone:</strong> {{$nomortelp}}<br>
                <strong>Email:</strong> {{$email}}br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$whatsapp}}" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="{{$github}}" class="Github"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Pengiriman Produk online via</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WaanArtDesign</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">WaanArt</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>