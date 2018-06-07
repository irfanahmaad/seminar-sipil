<section id="galeri">
	<div class="container">
		<div class="row">
			<div class="title-sections">
				<h2 style="font-size: 25px; margin-top: 50px;">Galeri</h2>
				<div class="garis" style="margin: 20px auto;"></div>
			</div>
		</div>
	</div>
<!-- 
<body>
 -->
  <!-- <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="portfolioFilter clearfix">
      <a href="#" data-filter="*" class="current">Tampilkan Semua</a>
      <a href="#" data-filter=".tahun1">2015</a>
      <a href="#" data-filter=".tahun2">2016</a>
      <a href="#" data-filter=".tahun3">2017</a>
    </div>
      </div>
     <div class="col-md-12">
     <div class="padding-20">
    <div class="portfolioContainer">

      <div class"tahun1">
         <img src="{{ asset('img/2015_1.jpg') }}">
      </div>

      <div class="tahun1">
        <img src="{{ asset('img/2015_2.jpg') }}">
      </div>

      <div class="tahun1 ">
     	<img src="{{ asset('img/2015_3.jpg') }}">
      </div>

      <div class="tahun2">
        <img src="{{ asset('img/2016_1.jpg') }}">
      </div>

      <div class="tahun2">
        <img src="{{ asset('img/2016_2.jpg') }}">
      </div>

      <div class="tahun1">
        <img src="{{ asset('img/2015_4.jpg') }}">
      </div>

      <div class="tahun3">
        <img src="{{ asset('img/2017_1.jpg') }}">
      </div>

      <div class="tahun1">
        <img src="{{ asset('img/2015_5.jpg') }}">
      </div>

      <div class="tahun2">
       <img src="{{ asset('img/2016_3.jpg') }}">
      </div>

      <div class="tahun3">
        <img src="{{ asset('img/2017_2.jpg') }}">
      </div>

      <div class="tahun3">
       <img src="{{ asset('img/2017_3.jpg') }}">
      </div>
      
      <div class="tahun3">
        <img src="{{ asset('img/2017_4.jpg') }}">
      </div>

        <div class="tahun3">
        <img src="{{ asset('img/2017_5.jpg') }}">
      </div>
     
       <div class="tahun3">
        <img src="{{ asset('img/2017_6.jpg') }}">
      </div>

      <div class="tahun3">
        <img src="{{ asset('img/2017_7.jpg') }}">
      </div>

      <div class="tahun3">
        <img src="{{ asset('img/2017_8.jpg') }}">
      </div>
    </div>
    </div>
  </div>
</div> -->

<!--   <div class="container">
  <div id="myBtnContainer">
  <button class="btn-gallery active" onclick="filterSelection('all')"> Show All</button>
  <button class="btn-gallery" onclick="filterSelection('tahun1')"> 2015</button>
  <button class="btn-gallery" onclick="filterSelection('tahun2')"> 2016</button>

</div> -->
<section id="gallery">
    <div id="image-gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2015_1.jpg') }}"><img src="{{ asset('img/2015_1.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2015_2.jpg') }}"><img src="{{ asset('img/2015_2.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2015_3.jpg') }}"><img src="{{ asset('img/2015_3.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2015_4.jpg') }}"><img src="{{ asset('img/2015_4.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2016_1.jpg') }}"><img src="{{ asset('img/2016_1.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2016_2.jpg') }}"><img src="{{ asset('img/2016_2.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2016_3.jpg') }}"><img src="{{ asset('img/2016_3.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_1.jpg') }}"><img src="{{ asset('img/2017_1.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_2.jpg') }}"><img src="{{ asset('img/2017_2.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_3.jpg') }}"><img src="{{ asset('img/2017_3.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_4.jpg') }}"><img src="{{ asset('img/2017_4.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_5.jpg') }}"><img src="{{ asset('img/2017_5.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_6.jpg') }}"><img src="{{ asset('img/2017_6.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_7.jpg') }}"><img src="{{ asset('img/2017_7.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2017_8.jpg') }}"><img src="{{ asset('img/2017_8.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ asset('img/2015_5.jpg') }}"><img src="{{ asset('img/2015_5.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
          </div>
        </div>
    </div>
    </div>
 </div>

</section>    