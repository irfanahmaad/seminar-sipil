<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Seminar Nasional Sipil 2018- Politeknik Negeri Jakarta</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Font Awesome-->
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/timeline2.css') }}" rel="stylesheet"> -->
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <!-- <link rel="stylesheet/less" type="text/css" href="styles.less"> -->
</head>
<body>
<section id="page-top"></section>
<section class="header" id="beranda">
  <div class="vertical-navbar-open">
  <div class="static-form">
    <div class="button-close-navbar-vertical col-xs-12">
        <i class="fa fa-times fa-2x" aria-hidden="true"></i> <strong>CLOSE</strong>
    </div>
    <div class="navbar-vertical col-xs-12 clear-padding-col">
      <nav>
        <ul>
          <li><a class="page-scroll" href="#page-top">BERANDA</a></li>
          <li><a class="page-scroll" href="#tentang-seminar">TENTANG SEMINAR</a></li>
          <li><a class="page-scroll" href="#pembicara">PEMBICARA</a></li>
          <li><a class="page-scroll" href="#important-dates">TANGGAL PENTING</a></li>
          <li><a class="page-scroll" href="#galeri">GALERI</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<div class="first-header nav-down" id="first-header">
  <div id="top-header">
    <strong class="col-xs-6 top-header-phone">
        <i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH )
    </strong>
    <strong class="col-xs-6 top-header-email">
        <i class="fa fa-envelope" aria-hidden="true"></i> semnas.sipil@pnj.ac.id
    </strong>
  </div>
  <div class="container">
    <div class="row">
      <div id="logo" class="col-xs-2 col-sm-2">
        <a href="#"><img src="{{ asset('img/logo/logo.png') }}" alt="logo"></a>
      </div>
        <div class="nav-bar col-xs-10 col-sm-10">
            <ul>
              <li><a class="page-scroll" href="#page-top">BERANDA</a></li>
              <li><a class="page-scroll" href="#tentang-seminar">TENTANG SEMINAR</a></li>
              <li><a class="page-scroll" href="#pembicara">PEMBICARA</a></li>
              <li><a class="page-scroll" href="#important-dates">TANGGAL PENTING</a></li>
              <li><a class="page-scroll" href="#galeri">GALERI</a></li>
            </ul>
        </div>
        <div id="nav-icon1">
          <div class="icon-nav">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
    </div>
  </div>
</div>
</section>
    @yield('content')
<section class="footer-container">
    <div class="container">
        <div class="row">
            <!-- <div class="text-center">
                <img src="{{ asset('img/logo/logo-footer.png') }}" alt="logo-footer" width="200px">
            </div> -->
            <!-- <div class="col-xs-12 col-sm-4 col-lg-6 col-lg-offset-3 text-center first-footer-column">
                <p>Bangunan hijau juga harus dimulai denga penggunaan lahan yang sesuai dengan tata ruang kota dan merupakan daerah peruntukan. Selain itu Green Building juga memperhatikan sampai taraf pengoperasian hingga dalam operasional pemeliharaannya. Manfaat Pembangunan Green Building meliputi manfaat lingkungan, manfaat ekonomi, manfaat sosial.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-8 col-lg-offset-2 text-center tagline">
                <p>"Green Construction Untuk Mewujudkan Pembangunan yang Berkelanjutan"</p>
            </div> -->
            <div class="col-xs-12 col-sm-6">
              <p>hai kiri</p>
            </div>
            <div class="col-xs-12 col-sm-6">
              
                <strong class="top top-header-phone tagline">
                  <h3>Hubungi Kami</h3>
                  <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH )</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH )</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH )</li>
                  </ul>
                  <!-- <i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH )
                  <i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH )
                  <i class="fa fa-phone" aria-hidden="true"></i> 0878 7203 2044 ( Rita Farida SH, MH ) -->
                </strong>
              
            </div>
        </div>
    </div>
</section>
<section class="footer-bottom">
    <div class="container">
        <div class="row">
            <p>&copy; Sipil - Politeknik Negeri Jakarta</p>
        </div>
    </div>
</section>
</body>
<script type="text/javascript" src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://isotope.metafizzy.co/v1/jquery.isotope.min.js'></script>

<script type="text/javascript" src="{{ asset('js/core.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/try.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timeline.js') }}"></script>

</html>

