<!DOCTYPE html>

<html lang="en">
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet"  href="<?php echo base_url(); ?>static/css/home.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>static/css/homeAnimation.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>static/css/popup.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script  src="<?php echo base_url(); ?>static/js/homeMessage.js"></script>
    <script  src="<?php echo base_url(); ?>static/js/homeTheme.js"></script>
    <script  src="<?php echo base_url(); ?>static/js/popup.js"></script>
    <script  src="<?php echo base_url(); ?>static/js/audioPlayer.js"></script>

    <title>Halo, Everybody</title>
</head>
<style>

    
</style>

<body onload="startTime(); typeWriter(); themeChanger()" ondblclick="audioPlayer()">
    <div class="container-fluid">
        <div id="header-section" class="row header-section">
        <div class="col-md-12">    
            <a href="<?php echo site_url(); ?>userlogin/ujian2" class="btn btn-dark btn-lg">
            <i class="fa fa-plus" aria-hidden="true"></i>Mulai </a>
            </div>    
        <div class="col-md-12 text-center box-area">
                <ul class="box-area">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <p class="mb-5" id="time"></p>
                    <div id="message" class="popup" onclick="popup()"></div>
            
            </div>    
        </div>
        </div>
</body>
</html>