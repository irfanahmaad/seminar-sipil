<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Seminar Nasional Sipil - Politeknik Negeri Jakarta</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Font Awesome-->
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<section class="header" id="beranda">
  <div class="vertical-navbar-open">
  <div class="static-form">
    <div class="button-close-navbar-vertical col-xs-12">
        <i class="fa fa-times fa-2x" aria-hidden="true"></i> <strong>CLOSE</strong>
    </div>
    <div class="navbar-vertical col-xs-12 clear-padding-col">
      <nav>
        <ul>
          <li><a class="page-scroll">BERANDA</a></li>
          <li><a class="page-scroll">KEGIATAN</a></li>
          <li><a class="page-scroll">PENDAFTARAN</a>
          </li>
          <li><a class="page-scroll">PROSIDING</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<div class="first-header nav-down" id="first-header">
  <div id="top-header">
    <strong class="pull-left">
        <i class="fa fa-phone" aria-hidden="true"></i> 089637672914
    </strong>
    <strong class="pull-right">
        <i class="fa fa-envelope" aria-hidden="true"></i> humas@sipil.seminar.pnj.ac.id
    </strong>
</div>
  <div class="container">
    <div class="row">
      <div id="logo" class="col-xs-2 col-sm-2">
        <a href="#"><img src="{{ asset('img/logo/logo.png') }}" alt="logo"></a>
      </div>
        <div class="nav-bar col-xs-10 col-sm-10">
            <ul>
              <li><a class="page-scroll">BERANDA</a></li>
              <li><a class="page-scroll">KEGIATAN</a></li>
              <li><a class="page-scroll">PENDAFTARAN</a>
              </li>
              <li><a class="page-scroll">PROSIDING</a></li>
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
            <div class="text-center">
                <img src="{{ asset('img/logo/logo-footer.png') }}" alt="logo-footer" width="200px">
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-6 col-lg-offset-3 text-center first-footer-column">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-6 col-lg-offset-3 text-center tagline">
                <p>"Change your future with technology"</p>
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
<script type="text/javascript" src="{{ asset('js/core.js') }}"></script>
</html>
