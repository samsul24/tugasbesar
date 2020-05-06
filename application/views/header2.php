
<head>
<!DOCTYPE html>
<html lang="en">

</head>
<script src="<?php echo base_url() ?>css/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>css/assets/vendor/scrollreveal/scrollreveal.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>css/assets/js/main.js"></script>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Plant Educataion</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

<link rel="icon" href="<?php echo base_url() ?>css/assets/img/12.png">
<link href="<?php echo base_url() ?>css/assets/img1/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Required meta tags -->
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- External CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style5.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/vendor/owl.carousel/assets/owl.carousel.min.css">

  <!-- External Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


  <!-- <title><?php echo $title; ?></title> -->
</head>
<body>
<div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Module</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Materi</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>Habitat</option>
                <option>Alat Pernafasan</option>
                <option>Morfologi</option>
                <option>Family</option>
                <option>Kategori</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Basah</option>
                <option>Kering</option>
                <option>Arizona</option><!-- 
                <option>California</option>
                <option>Colorado</option> -->
              </select>
            </div>
          </div>
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
         -->  <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<nav class="navbar navbar-default navbar-expand-lg fixed-top navbar-reduce">
    <div class="container">
    <?php if ($this->session->userdata('level') == '') { ?>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login">Login</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login/reg">Registration</a>
        <?php
        } elseif ($this->session->userdata('level') == 'admin') {
          ?>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">  <img src="<?php echo base_url(); ?>css/assets/img1/12.png"  width="50px" height="50px">Plant<span class="color-b">Education</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse justify-content-center collapse" id="navbarDefault" style="">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo site_url(); ?>login/out">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>adminclient">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Materi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url() ?>materi/habitat">Habitat</a>
              <a class="dropdown-item" href="<?php echo base_url() ?>materi/AlatPernafasan">Alat Pernafasan</a>
              <a class="dropdown-item" href="<?php echo base_url() ?>materi/morfologi">Morfologi</a>
              <a class="dropdown-item" href="<?php echo base_url() ?>materi/family">Family</a>
              <a class="dropdown-item" href="">Kategori</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>materi/latsol">Latihan Soal</a>
          </li>
          <li class="nav-item dropdown">
            <!-- <a class="nav-link" href="<?php echo site_url(); ?>game/index1">Game</a> -->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Game
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url(); ?>game/index1">Puzzle</a>
              <a class="dropdown-item" href="">Puzzle 2</a>
             
            </div>
          </li>
          
          <li class="nav-item">
          <a class="nav-link" href="">Komentar</a>

          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> 
    </div>
  </nav>
   
          <!-- <a class="dropdown-item" href="<?php echo site_url(); ?>userclient">Beranda</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/materi">Materi
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Habitat</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Morfologi</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Alat pernafasan</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Family </a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Kategori </a> -->
<!--         
        </a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/order">Latihan Soal</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/order">Komentar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login/out">Log Out</a> -->
        <?php
        } elseif ($this->session->userdata('level') == 'user') {
          ?>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">  <img src="<?php echo base_url(); ?>css/assets/img1/12.png"  width="50px" height="50px">Plant<span class="color-b">Education</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse justify-content-center collapse" id="navbarDefault" style="">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url() ?>login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>userclient">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Materi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="">Habitat</a>
              <a class="dropdown-item" href="">Alat Pernafasan</a>
              <a class="dropdown-item" href="">Morfologi</a>
              <a class="dropdown-item" href="">Family</a>
              <a class="dropdown-item" href="">Kategori</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Latihan Soal</a>
          </li>
          <li class="nav-item dropdown">
            <!-- <a class="nav-link" href="<?php echo site_url(); ?>game/index1">Game</a> -->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Game
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url(); ?>game/index1">Puzzle</a>
              <a class="dropdown-item" href="">Puzzle 2</a>
             
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="">Komentar</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> 
    </div>
  </nav>
                <!-- <a class="dropdown-item" href="<?php echo site_url(); ?>userclient">Beranda</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/materi">Materi
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Habitat</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Morfologi</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Alat pernafasan</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Family </a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>userclient/submateri">Kategori </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login/out">Log Out</a> -->
        <?php
        }; ?>
      </div>
    </li>
  </ul>
<body>