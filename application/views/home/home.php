<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>PPDB MTsN 3 NGAWI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sistem Pendaftaran Peserta Didik Baru MTsN 3 NGAWI" />
    <meta name="keywords" content="resposnive, retina, resume, jquery, css3, bootstrap" />
    <meta name="author" content="mk.network, Matt Khojim" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets3/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets3/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="assets3/css/animate.css" type="text/css">
    <link rel="stylesheet" href="assets3/css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="assets3/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets3/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets3/css/main.css" type="text/css">

    <script src="assets3/js/jquery-2.1.3.min.js"></script>
    <script src="assets3/js/modernizr.custom.js"></script>

    <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
  </head>

  <body class="material-template">
    <!-- Loading animation -->
    <div class="preloader">
    <div class="preloader-animation">
    <div class="preloader-spinner">
    </div>
    </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content">
          <div class="site-title-block mobile-hidden">
            <div class="site-title">Aplikasi <span>PPDB Online</span></div>
          </div>

          <!-- Navigation -->
          <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <li>
                <a class="pt-trigger" href="#home" data-animation="62">Welcome</a><!-- href value = data-id without # of .pt-page. -->
              </li>
            </ul>
            <!-- /Main menu -->
          </div>
          <!-- Navigation -->
        </div>
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Aplikasi PPDB Online</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page" data-id="home">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <img src="assets3/images/samawi.png" alt="">
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h2>Selamat Datang di PPDB Online</h2>
                        <div class="owl-carousel text-rotation">                                    
                          <!--<div class="item">-->
                          <!--  <div class="sp-subtitle">PPDB Online</div>-->
                          <!--</div>-->
                          <div class="item">
                            <div class="sp-subtitle">MTs NEGERI 3 NGAWI</div>
                          </div>
                            <div class="sp-subtitle">Jalur Penelusuran Minat, Prestasi dan Akhlak Mulia</div>
                          </div>
                            <div class="sp-subtitle">Tahun Pelajaran 2019/2020</div>
                        </div>
                      </div>

                      <!-- <div class="social-links">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                      <div class="col-sm-6 col-md-6 col-lg-6">
                          <div class="about-me">
                            <div class="block-title">
                              <h3>Info <span>PPDB</span></h3>
                            </div>
                            <p>Untuk melakukan pendaftaran, silahkan klik tombol "DAFTAR" dibawah ini.</p>
                          </div>
                          <div class="download-resume">
                            <a href="<?php echo site_url('ppdb/daftar');?>" class="btn btn-secondary">Daftar</a>
                          </div>
                          <br>
                          <br>
                          <div>
                            <p>Untuk login sebagai Admin, silahkan klik tombol dibawah.</p>
                          </div>
                          <div class="download-resume">
                            <a data-toggle="modal" data-target="#myModal" href="" class="btn btn-secondary">Login Admin</a>
                          </div>
                      </div>
                      
                      
                      <div class="block-title">
                          <h3>Tata Cara <span>Pendaftaran</span></h3>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <ul class="info-list">
                          <li><span class="title">1. Klik menu daftar kemudian buat username dan password.</span></li>
                          <li><span class="title">2. Login menggunakan username dan password yang sudah dibuat.</span></li>
                          <li><span class="title">3. Lengkapi isian biodata. Kemudian simpan.</span></li>
                          <li><span class="title">4. Cetak bukti pendaftaran.</span></li>
                          <li><span class="title">5. Bawa bukti pendaftaran ke MTsN 3 Ngawi dengan membawa FC raport dan berkas pendukung lainnya untuk diverifikasi oleh panitia.</span></li>
                        </ul>
                      </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->           

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
    <footer>
      <div class="copyrights">
        <p>© 2019 MTsN 3 NGAWI, All rights reserved. Powered by <a href="http://mattkhojim.com" target="blank">MK.Network</a></p>
      </div>
    </footer>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modalh4"><h4><span class="icon fa fa-lock"></span> LOGIN ADMIN</h4></div>
      </div>
      <div class="modal-body">
        <form role="form" action="<?php echo site_url('admin/login');?>" method="post" onSubmit="return cekform();">
          <div class="form-group">
            <label for="username"><span class="icon fa fa-user"></span> Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="">
          </div>
          <div class="form-group">
            <label for="password"><span class="icon fa fa-lock"></span> Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="">
          </div>
      
      <?php
      $info = $this->session->flashdata('info');
      if (!empty($info))
      {
        echo $info;
      }
      ?>
      
          <button type="submit" class="btn btn-block">Login 
            <span class="icon fa fa-lock"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="icon fa fa-remove"></span> Cancel
        </button>
        <!--<p>Need <a href="#">help?</a></p>-->
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript">
        function cekform()
        {
          if (!$("#username").val())
          {
            alert('Maaf Username tidak boleh kosong');
            $("#username").focus();
            return false;
          }
          if (!$("#password").val())
          {
            alert('Maaf Password tidak boleh kosong');
            $("#password").focus();
            return false;
          }
        }
    </script>

    <script type="text/javascript" src="assets3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets3/js/pages-switcher.js"></script>
    <script type="text/javascript" src="assets3/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="assets3/js/validator.js"></script>
    <script type="text/javascript" src="assets3/js/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="assets3/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="assets3/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets3/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets3/js/jquery.hoverdir.js"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="assets3/js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="assets3/js/main.js"></script>
  </body>
</html>
