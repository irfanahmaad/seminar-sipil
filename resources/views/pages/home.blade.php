@extends('layouts.app')

@section('content')
	@include('sections.banner')
	@include('sections.galeri')
	@include('sections.detail')
	@include('sections.maps')
	<div class="container" style="background-color: #ffffff">
		<div class="row">
			<div class="col-md-12" id="konten">
			<h1>Latar Belakang</h1>
			<div class="garis"></div>
				<div class="col-md-6">
					<div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('img/build.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-md-12" id="konten">
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
			<div class="col-md-12">
			<h1>Keynote Speakers</h1>
				<div class="garis"></div>
				<div class="col-md-4" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/dust.jpg') }}" class="img-responsive imgprofile">
						<div class="text-center profilespeaker"> Fathia Izzati </div>
						<div class="text-center profilespeaker"> Direktur PT.Badak </div>
					</div>
				</div>
				<div class="col-md-4" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/reza1.jpg') }}" class="img-responsive imgprofile">
						<div class="text-center profilespeaker"> Feza Rahardian </div>
						<div class="text-center profilespeaker"> Direktur PT.Sentosa </div>
					</div>
				</div>
				<div class="col-md-4" class="text-center">
					<div class="profilecontainer">
						<img src="{{ asset('img/islan.jpg') }}" class="img-responsive imgprofile">
						<div class="text-center profilespeaker"> Chelsea Islan </div>
						<div class="text-center profilespeaker"> Direktur PT.Matahari </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row text-center" style="background-color: #ffffff">
		<div class="col-md-6">
			<h3 class="text-center">Latar Belakang</h3>
			<img src="img/Freelancer.jpg" class="img-responsive">
			<p></p>
			<p>Politeknik Negeri Jakarta (PNJ) adalah salah satu lembaga pendidikan tinggi vokasi yang selalu berusaha untuk meningkatkan dan mengembangkan kompetensi civitas akademika di bidang ilmu pengetahuan dan teknologi terapan. Salah satu jurusan terbesar dalam PNJ adalah jurusan Teknik Sipil</p>
		</div>
		<div class="col-md-6">
			<h3 class="text-center">Bidang Kajian</h3>
			<img src="img/agency.jpg" class="imageprofile">
			<p></p>
			<p>Politeknik Negeri Jakarta (PNJ) adalah salah satu lembaga pendidikan tinggi vokasi yang selalu berusaha untuk meningkatkan dan mengembangkan kompetensi civitas akademika di bidang ilmu pengetahuan dan teknologi terapan. Salah satu jurusan terbesar dalam PNJ adalah jurusan Teknik Sipil</p>
	<!-- 	</div><div class="col-md-4">
			<h3 class="text-center">Keynote Speaker</h3>
			<img src="img/agency%202.jpg" class="imageprofile">
			<p></p>
			<p>Politeknik Negeri Jakarta (PNJ) adalah salah satu lembaga pendidikan tinggi vokasi yang selalu berusaha untuk meningkatkan dan mengembangkan kompetensi civitas akademika di bidang ilmu pengetahuan dan teknologi terapan. Salah satu jurusan terbesar dalam PNJ adalah jurusan Teknik Sipil</p>
		</div>
	</div> --> -->

	<!-- atur posisinya sesuai layout yang dipengen, jadi ga sesuai sama punya mesin, itu yang diatas cuman contoh-->
@endsection