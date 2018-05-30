@extends('layouts.app')

@section('content')
	@include('sections.banner')
	<div class="container atascol wrapper">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
				<h3 style="font-size: 18px;">Latar Belakang</h3>
				<div class="garis"></div>
					<img src="{{ asset('img/build.jpg') }}" width="300px" class="margin-bottom-15">
					<div class="latar-belakang-text col-xs-10 no-padding">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="padding-20">
					<h3 style="font-size: 18px;">Bidang Kajian</h3>
					<div class="garis"></div>
					<div class="bidang-kajian-text col-xs-10 no-padding">
					<ul>
						<li>Perancangan Produk</li>
						<li>Rekayasa Material</li>
						<li>Manufaktur dan Proses Produksi</li>
						<li>Perawatan dan Perbaikan</li>
						<li>Konversi Energi</li>
						<li>Teknologi Pengolahan Gas</li>
						<li>Pembangkit Tenaga Listrik</li>
						<li>Teknologi Alat Berat dan Otomotif</li>
					</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
				<h3 style="font-size: 18px;">Rundown Acara</h3>
				<div class="garis"></div>
					<div class="latar-belakang-text col-xs-10 no-padding">
						<a href="#" class="btn btn-info btn-flat greensipil left" style="margin-right:10px"><i class="fa fa-download"></i> Hari Pertama</a>
						<a href="#" class="btn btn-info btn-flat greensipil left"><i class="fa fa-download"></i> Hari Kedua</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
				<h3 style="font-size: 18px;">Format Abstrak Dan Makalah</h3>
				<div class="garis"></div>
					<div class="latar-belakang-text col-xs-10 no-padding">
						<a href="#" class="btn btn-info btn-flat btn-makalah greensipil left" style="margin-right:10px"><i class="fa fa-download"></i> Format Abstrak</a>
						<a href="#" class="btn btn-info btn-flat btn-makalah greensipil left" style="margin-right:10px"><i class="fa fa-download"></i> Format Makalah</a>
						<a href="#" class="btn btn-info btn-flat btn-makalah greensipil" style="margin-right:-30px"><i class="fa fa-download"></i> Contoh Penulisan</a>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center">
			<h2 style="font-size: 25px">Keynote Speakers</h2>
				<div class="garis" style="margin: 20px auto"></div>
				<div class="col-md-4" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/profile.png') }}" class="img-responsive imgprofile">
						<h3> John Doe </h3>
						<small style="font-size: 15px"> Direktur Politeknik </small>
					</div>
				</div>
				<div class="col-md-4" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/profile.png') }}" class="img-responsive imgprofile">
						<h3> John Doe </h3>
						<small style="font-size: 15px"> Direktur Politeknik </small>
					</div>
				</div>
				<div class="col-md-4" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/profile.png') }}" class="img-responsive imgprofile">
						<h3> John Doe </h3>
						<small style="font-size: 15px"> Direktur Politeknik </small>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-12" id="konten">
				<h1>Bidang Kajian</h1>
				<div class="garis"></div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-gear"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-home"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-cog"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-user"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-book"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-bank"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-automobile"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				<div class="col-md-3" class="text-center">
					<div class="iconcontainer">
						<div class="iconbidang"><i class="fa fa-anchor"></i></div>
						<div class="text-center iconjudul"> Perancangan Produk </div>
					</div>
				</div>
				
			</div>
			-->
		</div>
	</div>
	@include('sections.galeri')
	@include('sections.detail')
	@include('sections.maps')

	<!-- atur posisinya sesuai layout yang dipengen, jadi ga sesuai sama punya mesin, itu yang diatas cuman contoh-->
@endsection