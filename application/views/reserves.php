<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ZakMas Studio/Reserves</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('assets/lib/icomoon/icomoon.css') ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('assets/css/stylemain.css') ?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">


  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">

        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix">
      <h1><span class="icon icon-shield"></span></h1>
      <p>ZakMas Studio</p>
      <p>Exclusive Music Studio</p>
    </header>
  </div>
  <!-- /headerwrap -->

  <!-- ==== SERVICES ==== -->
  <div class="container" id="services" name="services">
    <br>
    <br>
    <div class="row">
      <h2 class="centered">Pemesanan</h2>
      <hr>
      <br>
      <div class="col-lg-3">
        <form action="/action_page.php" id="carform">
          <h3>Hari : </h3>
          <select name="carlist" form="carform">
            <option value="volvo">Hari</option>
            <option value="volvo">Senin</option>
            <option value="saab">Selasa</option>
            <option value="opel">Rabu</option>
            <option value="audi">Kamis</option>
            <option value="audi">Jum'at</option>
            <option value="audi">Sabtu</option>
            <option value="audi">Minggu</option>
          </select>
          <br>
          <h3>Jam : </h3>
          <select name="carlist" form="carform">
            <option value="volvo">Jam</option>
            <option value="volvo">9:00</option>
            <option value="saab">10:00</option>
            <option value="opel">11:00</option>
            <option value="audi">12:00</option>
            <option value="audi">13:00</option>
            <option value="audi">14:00</option>
            <option value="audi">15:00</option>
            <option value="audi">16:00</option>
            <option value="audi">17:00</option>
            <option value="audi">18:00</option>
            <option value="audi">19:00</option>
            <option value="audi">20:00</option>
            <option value="audi">21:00</option>
            <option value="audi">22:00</option>
          </select>
          <br>
          <h3>Durasi : </h3>
          <select name="carlist" form="carform">
            <option value="volvo">Durasi</option>
            <option value="volvo">1 jam</option>
            <option value="volvo">2 jam</option>
            <option value="volvo">3 jam</option>
            <option value="volvo">4 jam</option>
            <option value="volvo">5 jam</option>

          </select>

          <div class="form-group">
            <br>
            <div class="col-lg-10">
              <a href="<?php echo base_url('index.php/Login/Report') ?>">Pesan</a>
            </div>
          </div>
        </form>
      </div>
      <!-- col -->

      <!-- col -->


    </div>
    <!-- row -->
    <div class="col-lg-3">
      <h3>Contact Information</h3>
      <p><span class="icon icon-home"></span> Jl. Belum Jadi no 1<br />
        <span class="icon icon-phone"></span> +62812 3456 7890<br />
        <span class="icon icon-mobile"></span> +62812 3456 7891<br />
        <span class="icon icon-envelop"></span> <a href="#"> ZakMasStudio@example.com</a> <br />
        <span class="icon icon-twitter"></span> <a href="#"> @ZakMasStudio </a> <br />
        <span class="icon icon-facebook"></span> <a href="#"> ZakMasStudio </a> <br />
      </p>
    </div>
  </div>
  <!-- container -->


  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Shield</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/shield-bootstrap-agency-template/
            Licensing information: https://templatemag.com/license/
          -->
        Created with Shield template by <a href="https://templatemag.com/">TemplateMag</a>
        <br> Edited by Dimas Bayu Aji & Kamal Zaki Abdurrafi
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  !-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/php-mail-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js') ?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('/assets/js/mainPage.js') ?>"></script>


</body>

</html>