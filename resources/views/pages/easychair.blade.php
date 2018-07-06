@extends('layouts.app')

@section('content')
	<!-- codingnya disini ya bre -->
	<section id="important-dates" class="greensipil margin-top-header" style="position: relative;
    z-index: 99;">
		<div class="container">
			<div class="row text-center">
				<h2 style="font-size: 25px; color: #fff;">Tanggal Penting</h2>
				<div class="garis-putih" style="margin: 20px auto"></div>
			</div>
			<!-- Kodingannya disini bre -->
			<ul class="timeline">
			  <!-- Item 1 -->
			  <li>
			    <div class="direction-r">
			      <div class="flag-wrapper">
			        <span class="hexa"></span>
			        <span class="flag">Akhir Penerimaan Abstrak</span> 
			        <span class="time-wrapper"><span class="time">18 Agustus 2018</span></span>
			      </div>
			      <!-- <div class="desc">Batas Akhir Penerimaan Abstrak</div> -->
			    </div>
			  </li>
			  <!-- Item 2 -->
			  <li>
			    <div class="direction-l">
			      <div class="flag-wrapper ">
			        <span class="hexa"></span>
			        <span class="flag">Pengumuman Penerimaan Abstrak</span>
			        <span class="time-wrapper"><span class="time">25 Agustus 2018</span></span>
			      </div>
			      <!-- <div class="desc">Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.</div> -->
			    </div>
			  </li>

			  <!-- Item 3 -->
			  <li>
			    <div class="direction-r">
			      <div class="flag-wrapper">
			        <span class="hexa"></span>
			        <span class="flag">Akhir Full Paper</span>
			        <span class="time-wrapper"><span class="time">31 Agustus 2018</span></span>
			      </div>
			      <!-- <div class="desc">Lorem ipsum Minim labore Ut cupidatat quis qui deserunt proident fugiat pariatur cillum cupidatat reprehenderit sit id dolor consectetur ut.</div> -->
			    </div>
			  </li>
			   <!-- Item 4 -->
			  <li>
			    <div class="direction-l">
			      <div class="flag-wrapper">
			        <span class="hexa"></span>
			        <span class="flag">Pelaksanaan Seminar Nasional</span>
			        <span class="time-wrapper"><span class="time">15 September 2018</span></span>
			      </div>
			      <!-- <div class="desc">Lorem ipsum Minim labore Ut cupidatat quis qui deserunt proident fugiat pariatur cillum cupidatat reprehenderit sit id dolor consectetur ut.</div> -->
			    </div>
			  </li>
			</ul>
		</div>
	</section>
@endsection