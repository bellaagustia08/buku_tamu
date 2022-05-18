<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Content-Security-Policy: default-src 'self'");
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header("Referrer-Policy: no-referrer");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buku Tamu - Kominfo</title>

  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Custom fonts for this theme -->
  <link href="<?php echo base_url("assets/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="<?php echo base_url("assets/css/freelancer.min.css") ?>" rel="stylesheet">

  <style type="text/css">
    /* COMPACT CAPTCHA */
    .capbox {
      background-color: #BBBBBB;
      background-image: linear-gradient(#BBBBBB, #9E9E9E);
      border: #2A7D05 0px solid;
      border-width: 2px 2px 2px 20px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      display: inline-block;
      padding: 5px 8px 5px 8px;
      border-radius: 4px 4px 4px 4px;
    }

    .capbox-inner {
      font: bold 12px arial, sans-serif;
      color: #000000;
      background-color: #E3E3E3;
      margin: 0px auto 0px auto;
      padding: 3px 10px 5px 10px;
      border-radius: 4px;
      display: inline-block;
      vertical-align: middle;
    }

    #CaptchaDiv {
      color: #000000;
      font: normal 25px Impact, Charcoal, arial, sans-serif;
      font-style: italic;
      text-align: center;
      vertical-align: middle;
      background-color: #FFFFFF;
      user-select: none;
      display: inline-block;
      padding: 3px 14px 3px 8px;
      margin-right: 4px;
      border-radius: 4px;
    }

    #CaptchaInput {
      border: #38B000 2px solid;
      margin: 3px 0px 1px 0px;
      width: 105px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Kominfo's Guest Book</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('login'); ?>">Login</a>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <!--<img class="masthead-avatar mb-5" src="<?php echo base_url("assets/img/avataaars.svg") ?>" alt="">-->
      <img class="masthead-avatar mb-5" src="<?php echo base_url("assets/img/bantul_.png") ?>" alt="" style="width:150px;height:200px;">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Buku Tamu</h1> <br>
      <h2>Dinas Komunikasi dan Informatika</h2>

    </div>
  </header>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form action="<?php echo base_url() . 'index.php/Welcome/tambah_aksi'; ?>" method="post" id="contactForm" onsubmit="return checkform(this);">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nama</label>
                <input name="nama" class="form-control" id="nama" type="text" placeholder="Nama" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Instansi</label>
                <input name="instansi" class="form-control" id="instansi" type="instansi" placeholder="Instansi" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Alamat</label>
                <input name="alamat" class="form-control" id="alamat" type="alamat" placeholder="Alamat" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nomor HP</label>
                <input type="text" maxlength="12" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Keperluan</label>
                <textarea rows="5" cols="50" name="keperluan" class="form-control" id="keperluan" placeholder="Keperluan" required="required"></textarea>
              </div>
            </div>

            <!-- <div class="g-recaptcha" data-sitekey="6Lf0dNsaAAAAADLARPmWs1Ammviw9iyNILSzcRle" required="required"></div>
            <br><input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"> -->


            <!-- START CAPTCHA -->
            <!--<br>-->
            <!--<label>Tuliskan nomor captcha di bawah ini: </label> <br>-->
            <!--<div class="capbox">-->

            <!--<div id="CaptchaDiv"></div>-->

            <!--<div class="capbox-inner">-->
            <!--<input type="hidden" id="txtCaptcha">-->
            <!--<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>-->

            <!--</div>-->
            <!--</div>-->
            <!--<br><br>-->
            <!-- END CAPTCHA -->

            <br></br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Kirim</button>
            </div>
          </form>


        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <!--<img class="masthead-avatar mb-5" src="<?php echo base_url("assets/img/bantul_.png") ?>" alt="" style="width:100px;height:200px;">-->

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Alamat Kantor</h4>
          <p class="lead mb-0">Komplek Parasamya, Jl. R.W. Monginsidi No. 1 Bantul
            <br>Yogyakarta
          </p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Media Sosial</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/kominfobantul/" target="_blank">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/kominfobantul" target="_blank">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">E-mail Diskominfo</h4>
          <p class="lead mb-0">diskominfo@bantulkab.go.id</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Diskominfo Bantul 2020</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <script>
    // Restricts input for the given textbox to the given inputFilter.
    function setInputFilter(textbox, inputFilter) {
      ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
          if (inputFilter(this.value)) {
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
          } else if (this.hasOwnProperty("oldValue")) {
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
          } else {
            this.value = "";
          }
        });
      });
    }


    // Install input filters.
    setInputFilter(document.getElementById("no_hp"), function(value) {
      return /^\d*$/.test(value);
    });
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("assets/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url("assets/js/jqBootstrapValidation.js") ?>"></script>
  <!-- <script src="<?php echo base_url("assets/js/contact_me.js") ?>"></script> -->

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("assets/js/freelancer.min.js") ?>"></script>

</body>

</html>