<div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/background2.jpg)">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- <img src="<?php echo base_url(); ?>css/assets/img/12.png"  width="50px" height="50px"> -->
<script src="<?php echo base_url() ?>css/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
  
  <!-- Vendor CSS Files -->
  <title>Plant Educataion</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
<link rel="icon" href="<?php echo base_url() ?>css/assets/img/12.png">
<link href="<?php echo base_url() ?>css/assets/img1/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/owl.carousel/assets/owl.carousel.min.css">

  <!-- Template Main CSS File -->  
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style4.css">


  <!-- =======================================================
  * Template Name: EstateAgency - v2.0.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <!--/ Form Search Star /-->
        <!--   <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
         -->  
    </div>
  
  <!-- End Property Search Section -->>

 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>



  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Plant<span class="color-b">Education</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo site_url(); ?>login/out">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>userlogin">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Materi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url(); ?>userlogin/materi">Materi</a>
              <!-- <a class="dropdown-item" href="<?php echo site_url(); ?>userlogin/habitat">Habitat</a> -->
              <a class="dropdown-item" href="<?php echo site_url(); ?>userlogin/galeri">Galeri</a>
            </div>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pengayaan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url(); ?>userlogin/latsoal">Latihan Soal</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>userlogin/ujian1">ujian online</a>
              
            </div>
          </li>
         
          <li class="nav-item dropdown">
            <!-- <a class="nav-link" href="<?php echo site_url(); ?>game/index1">Game</a> -->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Game
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url(); ?>game/index1">Puzzle</a>
              <a class="dropdown-item" href="<?php echo site_url(); ?>game/index2">Puzzle 2</a>
             
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>komentaruser">Komentar</a>
          </li>
        </ul>
      </div>
      <!-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> -->
    </div>
  </nav><!-- End Header/Navbar -->