@extends('layouts.app')

@section('content')
	<!-- codingnya disini ya bre -->
	<div class="container wrapper margin-top-header" style="position: relative;">
		<div class="row">
		<div class="col-xs-12 col-md-4">
				<div class="padding-20">
					<div class="sidebar-wrap">
						<h3 style="font-size: 18px;">Bidang Peminatan</h3>
						<div class="garis"></div>
						<div class="bidang-kajian-text col-xs-10 no-padding">
						<ul>
							<li>Material</li>
							<li>Stuktur</li>
							<li>Geoteknik</li>
							<li>Manajemen Konstruksi</li>
							<li>Sumber Daya Air dan Lingkungan</li>
							<li>Metode Pelaksanaan dan K3</li>
							<li>Transportasi</li>
						</ul>
						</div>
					</div>
				</div
				<div class="col-xs-12 col-md-4">
				<div class="padding-20">
					<div class="sidebar-wrap">
						<h3 style="font-size: 18px;"><b>Makalah yang dipresentasikan akan dimuat</b></h3>
						<div class="garis"></div>
						<div class="bidang-kajian-text col-xs-10 no-padding">
							<ul>
								<li>Jurnal Politeknologi (Selected Papers)</li>
								<li>Construction And Material Journal (All Papers)</li>
							</ul>
							Terindeks : SINTA dan Google Scholar.
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="padding-20">
					<h3 style="font-size: 18px;">Proses Mengunggah Abstrak / Makalah menggunakan EasyChair</h3>
					<div class="garis"></div>
					<div class="col-xs-12 no-padding  margin-bottom-15" style="line-height: 24px;">
						1. Jika belum memiliki account di Easy Chair silahkan membuka tautan berikut 
						<a href="https://easychair.org/account/signup.cgi">https://easychair.org/account/signup.cgi</a>
						<div class="profilecontainer">
						<img src="{{ asset('img/sign.jpg') }}" class="img-responsive">
					</div>
						Jika sudah memiliki account di Easy Chair silahkan membuka tautan berikut 
						<a href="https://easychair.org/account/signin.cgi">https://easychair.org/account/signin.cgi</a>
					<div class="profilecontainer">
						<img src="{{ asset('img/login.jpg') }}" class="img-responsive">
					</div>
					</div>
					<div class="col-xs-12 no-padding  margin-bottom-15"  style="line-height: 24px;">
						2. Melakukan pendaftaran mengunggah abstrak dengan klik tautan
						<a href="https://easychair.org/conferences/?conf=sntspnj2018">https://easychair.org/conferences/?conf=sntspnj2018</a>
						kemudian klik enter as an author
					<div class="profilecontainer">
						<img src="{{ asset('img/unggah.jpg') }}" class="img-responsive">
					</div>
				</div>
				<div class="col-xs-12 no-padding  margin-bottom-15" style="line-height: 24px;">
						3. Klik menu New Submission 
				</div>
				<div class="col-xs-12 no-padding  margin-bottom-15"  style="line-height: 24px;">
						4. Mengisi kolom pengusul pada bagian Author 1 (Author 2 dan Author 3 dikosongkan) 
					<div class="profilecontainer">
						<img src="{{ asset('img/auth.jpg') }}" class="img-responsive">
					</div>
				</div>
				<div class="col-xs-12 no-padding  margin-bottom-15"  style="line-height: 24px;">
						5. Memasukan Judul Makalah dan minimal memasukan 3 kata kunci dari makalah
					<div class="profilecontainer">
						<img src="{{ asset('img/judul.jpg') }}" class="img-responsive">
					</div>
				</div>
				<div class="col-xs-12 no-padding  margin-bottom-15"  style="line-height: 24px;">
						6. Mengunggah makalah dengan format .doc dan docx. Kemudian klik tombol Submit.
					<div class="profilecontainer">
						<img src="{{ asset('img/final.jpg') }}" class="img-responsive">
					</div>
				</div>
			</div>
			
			</div>
		</div>
	</div>



	</section>
@endsection
<!-- NOTE -->
<!-- LINE HEIGHT TAMBAHIN -->