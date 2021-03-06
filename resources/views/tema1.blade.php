<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Survei Kepuasan Pelanggan PT. Jaya Kreasi Indonesia">
	<meta name="author" content="IT Dept.">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Survei Kepuasan Pelanggan</title>
	<!-- Favicons-->
	<link rel="shortcut icon" href="{{asset('public/tema1/wilio/img/logo/logo_jki.png')}}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('public/tema1/wilio/img/logo/logo_jki.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('public/tema1/wilio/img/logo/logo_jki.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('public/tema1/wilio/img/logo/logo_jki.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('public/tema1/wilio/img/logo/logo_jki.png')}}">
	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
	<!-- BASE CSS -->
	<link href="{{asset('public/tema1/wilio/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/tema1/wilio/css/menu.css')}}" rel="stylesheet">
	<link href="{{asset('public/tema1/wilio/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('public/tema1/wilio/css/vendors.css')}}" rel="stylesheet">
	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('public/tema1/wilio/css/custom.css')}}" rel="stylesheet">
	<!-- MODERNIZR MENU -->
	<script src="{{asset('public/tema1/wilio/js/modernizr.js')}}"></script>
</head>
<body>
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	<!-- <nav>
		<ul class="cd-primary-nav">
			<li><a href="{{asset('public/tema1/wilio/index.html')}}" class="animated_link">Home</a></li>
			<li><a href="{{asset('public/tema1/wilio/quotation-wizard-version.html')}}" class="animated_link">Quote Version</a></li>
			<li><a href="{{asset('public/tema1/wilio/review-wizard-version.html')}}" class="animated_link">Review Version</a></li>
			<li><a href="{{asset('public/tema1/wilio/registration-wizard-version.html')}}" class="animated_link">Registration Version</a></li>
			<li><a href="{{asset('public/tema1/wilio/about.html')}}" class="animated_link">About Us</a></li>
			<li><a href="{{asset('public/tema1/wilio/contacts.html')}}" class="animated_link">Contact Us</a></li>
		</ul>
	</nav> -->
	<!-- /menu -->
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left" style="background-color: #e0e0e0;">
				<div class="content-left-wrapper">
					<a href="https://jki.co.id/" id="logo" target="_blank"><img src="{{asset('public/tema1/wilio/img/logo/logo_jki.png')}}" alt="" width="49" height="35"></a>
					<div id="social">
						<ul>

							<a href="https://www.llumar.co.id/" target="_blank"><img src="{{asset('public/tema1/wilio/img/logo/logo_llumar.png')}}" alt="" height="35"></i></a>
							<a href="https://www.cpf1.co.id/" target="_blank"><img src="{{asset('public/tema1/wilio/img/logo/logo_cpf1.png')}}" alt="" width="68" height="35"></i></a>
							
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="{{asset('public/tema1/wilio/img/info_graphic_5.svg')}}" alt="" class="img-fluid"></figure>
						<h2>Survei Kepuasan Pelanggan</h2>
						<p>Sehubungan komitmen manajemen PT. Jaya Kreasi Indonesia dalam meningkatkan sistem manajemen kerja secara berkesinambungan terkait kualitas produk dan layanan ke pelanggan (memenuhi kepuasan pelanggan), kiranya dapat memberikan feedback harapan dan keinginan terkait kinerja PT. Jaya Kreasi Indonesia.</p>
						<a href="#start" class="btn_1 rounded" target="_parent">Mulai Sekarang!</a>
						<a href="#start" class="btn_1 rounded mobile_btn">Mulai Sekarang!</a>
					</div>
					<div class="copy">© 2020 PT. Jaya Kreasi Indonesia</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->
			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
						<div id="progressbar"></div>
					</div>
					<!-- /top-wizard -->
					<form id="wrapped" method="POST">
						@csrf
						@method('POST')
						<input id="website" name="website" type="text" value="">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">
								<h3 class="main_question"><strong>1/20</strong>Lengkapi terlebih dahulu data diri Anda</h3>
								<div class="form-group">
									<input type="text" name="nama" maxlength="100" class="form-control required" placeholder="Nama Anda">
								</div>
								<div class="form-group">
									<textarea name="alamat" maxlength="200" class="form-control required" placeholder="Alamat Anda"></textarea>
								</div>
								<div class="form-group">
									<input type="email" name="email" maxlength="100" class="form-control required" placeholder="Email Anda">
								</div>
								<div class="form-group">
									<input type="text" name="no_telp" id="no_telp" maxlength="15" class="form-control required" pattern="\+?([ -]?\d+)+|\(\d+\)([ -]\d+)" placeholder="Nomor Telepon (hanya angka)" onkeyup="if(/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
								</div>
								<div class="form-group">
									<input type="text" name="pendidikan" maxlength="30" class="form-control" placeholder="Pendidikan Terakhir">
								</div>
								<div class="form-group">
									<input type="text" name="jenis_pekerjaan" maxlength="50" class="form-control" placeholder="Jenis Pekerjaan">
								</div>
								<div class="form-group">
									<div class="styled-select clearfix">
										<select class="wide required" name="merk_dibeli">
											<option value="" selected disabled>Pilih Merk Kaca Film</option>
											<option value="LLumar">LLumar</option>
											<option value="CPF1">CPF1</option>
											
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-3">
										<div class="form-group">
											<input type="text" maxlength="2" name="usia" id="usia" class="form-control" placeholder="Usia" onkeyup="if(/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
										</div>
									</div>
									<div class="col-9">
										<div class="form-group radio_input">
											<label class="container_radio">Laki-laki
												<input type="radio" name="jenis_kelamin" value="laki-laki" class="required">
												<span class="checkmark"></span>
											</label>
											<label class="container_radio">Perempuan
												<input type="radio" name="jenis_kelamin" value="perempuan" class="required">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>2/20</strong>Tata Cara Pengisian</h3>
								<div>
									
									<table class="table table-sm bordered">
										<tr>
											<th colspan="2">Tingkat Kepuasan</th>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/1star.png')}}"></td>
											<td>: Sangat Tidak Puas</td>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/2star.png')}}"></td>
											<td>: Tidak Puas</td>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/3star.png')}}"></td>
											<td>: Puas</td>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/4star.png')}}"></td>
											<td>: Sangat Puas</td>
										</tr>
									</table>

									<table class="table table-sm bordered">
										<tr>
											<th colspan="2">Tingkat Kepentingan</th>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/1star.png')}}"></td>
											<td>: Sangat Tidak Penting</td>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/2star.png')}}"></td>
											<td>: Tidak Penting</td>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/3star.png')}}"></td>
											<td>: Penting</td>
										</tr>
										<tr>
											<td><img src="{{asset('public/tema1/wilio/img/star/4star.png')}}"></td>
											<td>: Sangat Penting</td>
										</tr>
									</table>
								</div>

								
							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>3/20</strong>Kaca film yang memberikan performance yang stabil untuk mengurangi panas matahari dan kualitas warna yang stabil.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-1-4" name="rating_input_1" value="4" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-3" name="rating_input_1" value="3" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-2" name="rating_input_1" value="2" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-1-1" name="rating_input_1" value="1" onchange="getVals(this, 'rating_input_1');">
										<label for="rating-input-1-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-2-4" name="rating_input_2" value="4" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-3" name="rating_input_2" value="3" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-2" name="rating_input_2" value="2" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-2-1" name="rating_input_2" value="1" onchange="getVals(this, 'rating_input_2');">
										<label for="rating-input-2-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>
								
							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>4/20</strong>Kaca film yang menawarkan varian warna  yang beragam.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-3-4" name="rating_input_3" value="4" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-3" name="rating_input_3" value="3" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-2" name="rating_input_3" value="2" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-3-1" name="rating_input_3" value="1" onchange="getVals(this, 'rating_input_3');">
										<label for="rating-input-3-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-4-4" name="rating_input_4" value="4" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-3" name="rating_input_4" value="3" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-2" name="rating_input_4" value="2" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-4-1" name="rating_input_4" value="1" onchange="getVals(this, 'rating_input_4');">
										<label for="rating-input-4-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>5/20</strong>Ketepatan spesifikasi mutu   produk antara yang tertulis di brosur dengan kenyataan produk  yang sesungguhnya.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-5-4" name="rating_input_5" value="4" onchange="getVals(this, 'rating_input_5')">
										<label for="rating-input-5-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-5-3" name="rating_input_5" value="3" onchange="getVals(this, 'rating_input_5')">
										<label for="rating-input-5-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-5-2" name="rating_input_5" value="2" onchange="getVals(this, 'rating_input_5')">
										<label for="rating-input-5-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-5-1" name="rating_input_5" value="1" onchange="getVals(this, 'rating_input_5')">
										<label for="rating-input-5-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-6-4" name="rating_input_6" value="4" onchange="getVals(this, 'rating_input_6')">
										<label for="rating-input-6-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-6-3" name="rating_input_6" value="3" onchange="getVals(this, 'rating_input_6')">
										<label for="rating-input-6-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-6-2" name="rating_input_6" value="2" onchange="getVals(this, 'rating_input_6')">
										<label for="rating-input-6-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-6-1" name="rating_input_6" value="1" onchange="getVals(this, 'rating_input_6')">
										<label for="rating-input-6-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>6/20</strong>Produk kaca film yang terpasang dengan rapih dan baik.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-7-4" name="rating_input_7" value="4" onchange="getVals(this, 'rating_input_7');">
										<label for="rating-input-7-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-7-3" name="rating_input_7" value="3" onchange="getVals(this, 'rating_input_7');">
										<label for="rating-input-7-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-7-2" name="rating_input_7" value="2" onchange="getVals(this, 'rating_input_7');">
										<label for="rating-input-7-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-7-1" name="rating_input_7" value="1" onchange="getVals(this, 'rating_input_7');">
										<label for="rating-input-7-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-8-4" name="rating_input_8" value="4" onchange="getVals(this, 'rating_input_8');">
										<label for="rating-input-8-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-8-3" name="rating_input_8" value="3" onchange="getVals(this, 'rating_input_8');">
										<label for="rating-input-8-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-8-2" name="rating_input_8" value="2" onchange="getVals(this, 'rating_input_8');">
										<label for="rating-input-8-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-8-1" name="rating_input_8" value="1" onchange="getVals(this, 'rating_input_8');">
										<label for="rating-input-8-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>7/20</strong>Mudah mendapatkan jaringan penjualan kaca film yang diinginkan.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-9-4" name="rating_input_9" value="4" onchange="getVals(this, 'rating_input_9');">
										<label for="rating-input-9-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-9-3" name="rating_input_9" value="3" onchange="getVals(this, 'rating_input_9');">
										<label for="rating-input-9-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-9-2" name="rating_input_9" value="2" onchange="getVals(this, 'rating_input_9');">
										<label for="rating-input-9-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-9-1" name="rating_input_9" value="1" onchange="getVals(this, 'rating_input_9');">
										<label for="rating-input-9-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-10-4" name="rating_input_10" value="4" onchange="getVals(this, 'rating_input_10');">
										<label for="rating-input-10-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-10-3" name="rating_input_10" value="3" onchange="getVals(this, 'rating_input_10');">
										<label for="rating-input-10-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-10-2" name="rating_input_10" value="2" onchange="getVals(this, 'rating_input_10');">
										<label for="rating-input-10-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-10-1" name="rating_input_10" value="1" onchange="getVals(this, 'rating_input_10');">
										<label for="rating-input-10-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>8/20</strong>Produk kaca film yang diberikan adalah produk asli brand tersebut.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-11-4" name="rating_input_11" value="4" onchange="getVals(this, 'rating_input_11');">
										<label for="rating-input-11-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-11-3" name="rating_input_11" value="3" onchange="getVals(this, 'rating_input_11');">
										<label for="rating-input-11-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-11-2" name="rating_input_11" value="2" onchange="getVals(this, 'rating_input_11');">
										<label for="rating-input-11-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-11-1" name="rating_input_11" value="1" onchange="getVals(this, 'rating_input_11');">
										<label for="rating-input-11-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-12-4" name="rating_input_12" value="4" onchange="getVals(this, 'rating_input_12');">
										<label for="rating-input-12-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-12-3" name="rating_input_12" value="3" onchange="getVals(this, 'rating_input_12');">
										<label for="rating-input-12-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-12-2" name="rating_input_12" value="2" onchange="getVals(this, 'rating_input_12');">
										<label for="rating-input-12-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-12-1" name="rating_input_12" value="1" onchange="getVals(this, 'rating_input_12');">
										<label for="rating-input-12-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>9/20</strong>Kemudahan konsumen mendapatkan informasi type produk yang tepat untuk digunakan.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-13-4" name="rating_input_13" value="4" onchange="getVals(this, 'rating_input_13');">
										<label for="rating-input-13-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-13-3" name="rating_input_13" value="3" onchange="getVals(this, 'rating_input_13');">
										<label for="rating-input-13-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-13-2" name="rating_input_13" value="2" onchange="getVals(this, 'rating_input_13');">
										<label for="rating-input-13-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-13-1" name="rating_input_13" value="1" onchange="getVals(this, 'rating_input_13');">
										<label for="rating-input-13-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-14-4" name="rating_input_14" value="4" onchange="getVals(this, 'rating_input_14');">
										<label for="rating-input-14-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-14-3" name="rating_input_14" value="3" onchange="getVals(this, 'rating_input_14');">
										<label for="rating-input-14-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-14-2" name="rating_input_14" value="2" onchange="getVals(this, 'rating_input_14');">
										<label for="rating-input-14-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-14-1" name="rating_input_14" value="1" onchange="getVals(this, 'rating_input_14');">
										<label for="rating-input-12-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>10/20</strong>Ketersediaan bagi konsumen,jalur komunikasi telepon pelayanan konsumen.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-15-4" name="rating_input_15" value="4" onchange="getVals(this, 'rating_input_15');">
										<label for="rating-input-15-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-15-3" name="rating_input_15" value="3" onchange="getVals(this, 'rating_input_15');">
										<label for="rating-input-15-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-15-2" name="rating_input_15" value="2" onchange="getVals(this, 'rating_input_15');">
										<label for="rating-input-15-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-15-1" name="rating_input_15" value="1" onchange="getVals(this, 'rating_input_15');">
										<label for="rating-input-15-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-16-4" name="rating_input_16" value="4" onchange="getVals(this, 'rating_input_16');">
										<label for="rating-input-16-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-16-3" name="rating_input_16" value="3" onchange="getVals(this, 'rating_input_16');">
										<label for="rating-input-16-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-16-2" name="rating_input_16" value="2" onchange="getVals(this, 'rating_input_16');">
										<label for="rating-input-16-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-16-1" name="rating_input_16" value="1" onchange="getVals(this, 'rating_input_16');">
										<label for="rating-input-16-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>11/20</strong>Kemudahan konsumen untuk mendapatkan jaringan pelayanan purna jual.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-17-4" name="rating_input_17" value="4" onchange="getVals(this, 'rating_input_17');">
										<label for="rating-input-17-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-17-3" name="rating_input_17" value="3" onchange="getVals(this, 'rating_input_17');">
										<label for="rating-input-17-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-17-2" name="rating_input_17" value="2" onchange="getVals(this, 'rating_input_17');">
										<label for="rating-input-17-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-17-1" name="rating_input_17" value="1" onchange="getVals(this, 'rating_input_17');">
										<label for="rating-input-17-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-18-4" name="rating_input_18" value="4" onchange="getVals(this, 'rating_input_18');">
										<label for="rating-input-18-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-18-3" name="rating_input_18" value="3" onchange="getVals(this, 'rating_input_18');">
										<label for="rating-input-18-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-18-2" name="rating_input_18" value="2" onchange="getVals(this, 'rating_input_18');">
										<label for="rating-input-18-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-18-1" name="rating_input_18" value="1" onchange="getVals(this, 'rating_input_18');">
										<label for="rating-input-18-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>12/20</strong>Kecepatan penyelesaian keluhan dan masalah konsumen.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-19-4" name="rating_input_19" value="4" onchange="getVals(this, 'rating_input_19');">
										<label for="rating-input-19-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-19-3" name="rating_input_19" value="3" onchange="getVals(this, 'rating_input_19');">
										<label for="rating-input-19-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-19-2" name="rating_input_19" value="2" onchange="getVals(this, 'rating_input_19');">
										<label for="rating-input-19-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-19-1" name="rating_input_19" value="1" onchange="getVals(this, 'rating_input_19');">
										<label for="rating-input-19-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-20-4" name="rating_input_20" value="4" onchange="getVals(this, 'rating_input_20');">
										<label for="rating-input-20-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-20-3" name="rating_input_20" value="3" onchange="getVals(this, 'rating_input_20');">
										<label for="rating-input-20-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-20-2" name="rating_input_20" value="2" onchange="getVals(this, 'rating_input_20');">
										<label for="rating-input-20-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-20-1" name="rating_input_20" value="1" onchange="getVals(this, 'rating_input_20');">
										<label for="rating-input-20-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>13/20</strong>Garansi produk akibat produk cacat pabrikasi dan kesalahan pemasangan.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-21-4" name="rating_input_21" value="4" onchange="getVals(this, 'rating_input_21');">
										<label for="rating-input-21-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-21-3" name="rating_input_21" value="3" onchange="getVals(this, 'rating_input_21');">
										<label for="rating-input-21-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-21-2" name="rating_input_21" value="2" onchange="getVals(this, 'rating_input_21');">
										<label for="rating-input-21-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-21-1" name="rating_input_21" value="1" onchange="getVals(this, 'rating_input_21');">
										<label for="rating-input-21-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-22-4" name="rating_input_22" value="4" onchange="getVals(this, 'rating_input_22');">
										<label for="rating-input-22-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-22-3" name="rating_input_22" value="3" onchange="getVals(this, 'rating_input_22');">
										<label for="rating-input-22-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-22-2" name="rating_input_22" value="2" onchange="getVals(this, 'rating_input_22');">
										<label for="rating-input-22-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-22-1" name="rating_input_22" value="1" onchange="getVals(this, 'rating_input_22');">
										<label for="rating-input-22-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>14/20</strong>Kemudahan prosedur pengajuan claim.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-23-4" name="rating_input_23" value="4" onchange="getVals(this, 'rating_input_23');">
										<label for="rating-input-23-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-23-3" name="rating_input_23" value="3" onchange="getVals(this, 'rating_input_23');">
										<label for="rating-input-23-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-23-2" name="rating_input_23" value="2" onchange="getVals(this, 'rating_input_23');">
										<label for="rating-input-23-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-23-1" name="rating_input_23" value="1" onchange="getVals(this, 'rating_input_23');">
										<label for="rating-input-23-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-24-4" name="rating_input_24" value="4" onchange="getVals(this, 'rating_input_24');">
										<label for="rating-input-24-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-24-3" name="rating_input_24" value="3" onchange="getVals(this, 'rating_input_24');">
										<label for="rating-input-24-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-24-2" name="rating_input_24" value="2" onchange="getVals(this, 'rating_input_24');">
										<label for="rating-input-24-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-24-1" name="rating_input_24" value="1" onchange="getVals(this, 'rating_input_24');">
										<label for="rating-input-24-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>15/20</strong>Mendapatkan harga yang sesuai dengan kualitas produk & harga yang kompetitif.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-25-4" name="rating_input_25" value="4" onchange="getVals(this, 'rating_input_25');">
										<label for="rating-input-25-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-25-3" name="rating_input_25" value="3" onchange="getVals(this, 'rating_input_25');">
										<label for="rating-input-25-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-25-2" name="rating_input_25" value="2" onchange="getVals(this, 'rating_input_25');">
										<label for="rating-input-25-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-25-1" name="rating_input_25" value="1" onchange="getVals(this, 'rating_input_25');">
										<label for="rating-input-25-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-26-4" name="rating_input_26" value="4" onchange="getVals(this, 'rating_input_26');">
										<label for="rating-input-26-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-26-3" name="rating_input_26" value="3" onchange="getVals(this, 'rating_input_26');">
										<label for="rating-input-26-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-26-2" name="rating_input_26" value="2" onchange="getVals(this, 'rating_input_26');">
										<label for="rating-input-26-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-26-1" name="rating_input_26" value="1" onchange="getVals(this, 'rating_input_26');">
										<label for="rating-input-26-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>16/20</strong>Merek kaca film yang terkenal & citra produk yang baik.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-27-4" name="rating_input_27" value="4" onchange="getVals(this, 'rating_input_27');">
										<label for="rating-input-27-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-27-3" name="rating_input_27" value="3" onchange="getVals(this, 'rating_input_27');">
										<label for="rating-input-27-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-27-2" name="rating_input_27" value="2" onchange="getVals(this, 'rating_input_27');">
										<label for="rating-input-27-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-27-1" name="rating_input_27" value="1" onchange="getVals(this, 'rating_input_27');">
										<label for="rating-input-27-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-28-4" name="rating_input_28" value="4" onchange="getVals(this, 'rating_input_28');">
										<label for="rating-input-28-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-28-3" name="rating_input_28" value="3" onchange="getVals(this, 'rating_input_28');">
										<label for="rating-input-28-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-28-2" name="rating_input_28" value="2" onchange="getVals(this, 'rating_input_28');">
										<label for="rating-input-28-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-28-1" name="rating_input_28" value="1" onchange="getVals(this, 'rating_input_28');">
										<label for="rating-input-28-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>17/20</strong>Tersedianya sarana website dan social media dari produk.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-29-4" name="rating_input_29" value="4" onchange="getVals(this, 'rating_input_29');">
										<label for="rating-input-29-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-29-3" name="rating_input_29" value="3" onchange="getVals(this, 'rating_input_29');">
										<label for="rating-input-29-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-29-2" name="rating_input_29" value="2" onchange="getVals(this, 'rating_input_29');">
										<label for="rating-input-29-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-29-1" name="rating_input_29" value="1" onchange="getVals(this, 'rating_input_29');">
										<label for="rating-input-29-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-30-4" name="rating_input_30" value="4" onchange="getVals(this, 'rating_input_30');">
										<label for="rating-input-30-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-30-3" name="rating_input_30" value="3" onchange="getVals(this, 'rating_input_30');">
										<label for="rating-input-30-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-30-2" name="rating_input_30" value="2" onchange="getVals(this, 'rating_input_30');">
										<label for="rating-input-30-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-30-1" name="rating_input_30" value="1" onchange="getVals(this, 'rating_input_30');">
										<label for="rating-input-30-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>18/20</strong>Penjualan, pemasangan, dan pelayanan purna jual hanya di Dealer jaringan resmi.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-31-4" name="rating_input_31" value="4" onchange="getVals(this, 'rating_input_31');">
										<label for="rating-input-31-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-31-3" name="rating_input_31" value="3" onchange="getVals(this, 'rating_input_31');">
										<label for="rating-input-31-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-31-2" name="rating_input_31" value="2" onchange="getVals(this, 'rating_input_31');">
										<label for="rating-input-31-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-31-1" name="rating_input_31" value="1" onchange="getVals(this, 'rating_input_31');">
										<label for="rating-input-31-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-32-4" name="rating_input_32" value="4" onchange="getVals(this, 'rating_input_32');">
										<label for="rating-input-32-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-32-3" name="rating_input_32" value="3" onchange="getVals(this, 'rating_input_32');">
										<label for="rating-input-32-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-32-2" name="rating_input_32" value="2" onchange="getVals(this, 'rating_input_32');">
										<label for="rating-input-32-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-32-1" name="rating_input_32" value="1" onchange="getVals(this, 'rating_input_32');">
										<label for="rating-input-32-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="step">
								<h3 class="main_question"><strong>19/20</strong>Kaca film dipasang oleh pemasang kaca film profesional.</h3>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepuasan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-33-4" name="rating_input_33" value="4" onchange="getVals(this, 'rating_input_33');">
										<label for="rating-input-33-4" class="rating-star" title="Sangat Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-33-3" name="rating_input_33" value="3" onchange="getVals(this, 'rating_input_33');">
										<label for="rating-input-33-3" class="rating-star" title="Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-33-2" name="rating_input_33" value="2" onchange="getVals(this, 'rating_input_33');">
										<label for="rating-input-33-2" class="rating-star" title="Tidak Puas"></label>
										<input type="radio" class="required rating-input" id="rating-input-33-1" name="rating_input_33" value="1" onchange="getVals(this, 'rating_input_33');">
										<label for="rating-input-33-1" class="rating-star" title="Sangat Tidak Puas"></label>
									</span>
								</div>
								<div class="form-group rating_wp clearfix">
									<label class="rating_type">Tingkat Kepentingan</label>
									<span class="rating">
										<input type="radio" class="required rating-input" id="rating-input-34-4" name="rating_input_34" value="4" onchange="getVals(this, 'rating_input_34');">
										<label for="rating-input-34-4" class="rating-star" title="Sangat Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-34-3" name="rating_input_34" value="3" onchange="getVals(this, 'rating_input_34');">
										<label for="rating-input-34-3" class="rating-star" title="Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-34-2" name="rating_input_34" value="2" onchange="getVals(this, 'rating_input_34');">
										<label for="rating-input-34-2" class="rating-star" title="Tidak Penting"></label>
										<input type="radio" class="required rating-input" id="rating-input-34-1" name="rating_input_34" value="1" onchange="getVals(this, 'rating_input_34');">
										<label for="rating-input-34-1" class="rating-star" title="Sangat Tidak Penting"></label>
									</span>
								</div>

							</div>
							<!-- /step-->
							<div class="submit step">
								<h3 class="main_question"><strong>20/20</strong>Saran & Masukan</h3>
								<div class="form-group add_top_30">
									<textarea name="saran_masukan" class="form-control review_message required" placeholder="Tuliskan kritik dan saran Anda ..." onkeyup="getVals(this, 'review_message');"></textarea>
								</div>
							</div>
							
							<!-- <div class="submit step">
								<h3 class="main_question"><strong>20/20</strong>Summary</h3>
								<div class="summary">
									<ul>
										<li><strong>1</strong>
											<h5>Pertanyaan 1</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label> <span id="rating_input_1" class="float-right"></span></li>
												<li><label>Tingkat Kepentingan</label> <span id="rating_input_2" class="float-right"></span></li>
												
											</ul>
										</li>
										<li><strong>2</strong>
											<h5>Pertanyaan 2</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_3" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_4" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>3</strong>
											<h5>Pertanyaan 3</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_5" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_6" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>4</strong>
											<h5>Pertanyaan 4</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_7" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_8" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>5</strong>
											<h5>Pertanyaan 5</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_9" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_10" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>6</strong>
											<h5>Pertanyaan 6</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_11" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_12" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>7</strong>
											<h5>Pertanyaan 7</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_13" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_14" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>8</strong>
											<h5>Pertanyaan 8</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_15" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_16" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>9</strong>
											<h5>Pertanyaan 9</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_17" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_18" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>10</strong>
											<h5>Pertanyaan 10</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_19" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_20" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>11</strong>
											<h5>Pertanyaan 11</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_21" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_22" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>12</strong>
											<h5>Pertanyaan 12</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_23" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_24" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>13</strong>
											<h5>Pertanyaan 13</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_25" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_26" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>14</strong>
											<h5>Pertanyaan 14</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_27" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_28" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>15</strong>
											<h5>Pertanyaan 15</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_29" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_30" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>16</strong>
											<h5>Pertanyaan 16</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_31" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_32" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>17</strong>
											<h5>Pertanyaan 17</h5>
											<ul>
												<li><label>Tingkat Kepuasan</label><span id="rating_input_33" class="float-right"> </span></li>
												<li><label>Tingkat Kepentingan</label><span id="rating_input_34" class="float-right"> </span></li>
												
											</ul>
										</li>
										<li><strong>18</strong>
											<h5>Saran & Masukan</h5>
											<p id="review_message"></p>
										</li>
									</ul>
								</div>
							</div> -->
							<!-- /step-->
						</div>
						<!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward">Prev</button>
							<button type="button" name="forward" class="forward">Next</button>
							<button type="submit" name="process" class="submit" style="background-color: #28a745;">Submit</button>
						</div>
						<!-- /bottom-wizard -->
					</form>
				</div>
				<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->
	<!-- <div class="cd-overlay-nav">
		<span></span>
	</div> -->
	<!-- /cd-overlay-nav -->
	<!-- <div class="cd-overlay-content">
		<span></span>
	</div> -->
	<!-- /cd-overlay-content -->
	<!-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->
	<!-- /menu button -->
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- COMMON SCRIPTS -->
	<script src="{{asset('public/tema1/wilio/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/tema1/wilio/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('public/tema1/wilio/js/velocity.min.js')}}"></script>
	<script src="{{asset('public/tema1/wilio/js/functions.js')}}"></script>
	<!-- Wizard script -->
	<script src="{{asset('public/tema1/wilio/js/review_func_2.js')}}"></script>
	
	<!-- <script type="text/javascript">
		function getVal5(id) {
			var val = document.getElementById(id).value;
			document.getElementById('rating_input_5').value = val;

		}
	</script>
	<script type="text/javascript">
		function getVal6(id) {
			var val6 = document.getElementById(id).value;
			document.getElementById('rating_input_6').value = val6;

		}
	</script> -->
</body>
</html>