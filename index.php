<?php

	session_start();
	include "include/koneksi.php";
	$lowongan = new Lowongan();
	if(isset($_SESSION['user'])){
		echo "<script language='javascript'> window.location.href='user/index.php'</script>";
	}

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="fonts/2/icomoon/style.css">
	<link rel="stylesheet" href="fonts/2/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/2/tiny-slider.css">
	<link rel="stylesheet" href="css/2/aos.css">
	<link rel="stylesheet" href="css/2/glightbox.min.css">
	<link rel="stylesheet" href="css/2/style.css">

	<title>Karir &mdash; PBH Peradi Ponorogo</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="index.php" class="logo m-0 float-start">PBH PREADI<span class="text-primary">.</span> </a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
					<li><a href="#beranda">Beranda</a></li>
					<li>
						<a href="#tentangkami">Tentang Kami</a>
					</li>
					<li><a href="#karir">Karir</a></li>
					<li><a href="#kontak">Kontak</a></li>
				</ul>

				

				<ul class="site-menu float-end d-none d-md-block">
				
					
				
							<li><a class="d-flex align-items-center text-white h2 fw-bold" href="login_user.php" >Masuk</a></li>
							<li><a class="d-flex align-items-center text-white h2 fw-bold"href="register.php">Daftar</a></li>
				
					
				</ul>

			</div>
		</div>
	</nav>

	<div id="beranda" class="hero-2 overlay" style="background-image: url('images/home.jpeg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Bergabunglah bersama Kami</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Organisasi Advokat yang bebas dan independen, melayani untuk melindungi kepentingan pencarian keadilan, dan menjalankan tugas sebaik-baiknya untuk melayani para anggotanya</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section sec-4" id="tentangkami">
		<div class="container">
			<div class="row border-bottom mb-5 pb-5 justify-content-between">
				<div class="col-lg-4 align-self-center mb-5">
					<h2 class="heading mb-4">Tentang Karir Peradi</h2>
					<p>Karir Peradi hadir sebagai satu-satunya platform rekrutmen dan seleksi PBH Peradi Ponorogo yang memudahkan kalian untuk mengikuti proses seleksi kapanpun dan dimanapun dengan menggunakan laptop/komputer. Melamar kerja tidak pernah semudah ini.</p>
				</div>
				<div class="col-lg-7">
					
						
						<img src="images/img_7.jpg" alt="Image" class="img-fluid">
			
				</div>
			</div>
	
		</div>
	</div>



	<div class="section sec-contact" id="karir">
		<div class="container">
			<div class="row mb-5 justify-content-center text-center">
				<div class="col-lg-5">
					<h2 class="heading">Lowongan Kerja</h2>
					<p class="text-black-50">Penerimaan Pegawai PBH Peradi</p>
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Penerimaan</th>
						<th>Kuota</th>
					</tr>
				</thead>

			<?php
				$get= $lowongan->GetData("where status='1'");
				$no = 1;
				while($row = $get->fetch()){
					echo "<tr>
						<td>$no</td>
						<td>$row[lowongan]</td>
						<td>$row[kuota]</td>
						<td><a href='#' class='show_rincian' data-id='$row[id_lowongan]' data-wow-delay='1s' data-toggle='modal' data-target='#myModalSyarat'>Syarat</a></td>
						</tr>";
						$no++; 
				}
			?>
			</table>
		</div>
	</div>


	

	<div class="site-footer bg-light" id="kontak">
		<div class="container">

			<div class="row justify-content-between">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="line-top">Tentang Kami</h3>
						<p class="mb-5">
						Karir Peradi hadir sebagai satu-satunya platform rekrutmen dan seleksi PBH Peradi Ponorogo yang memudahkan kalian untuk mengikuti proses seleksi kapanpun dan dimanapun dengan menggunakan laptop/komputer. Melamar kerja tidak pernah semudah ini.</p>

					</div>
					<div class="widget">
						<h3 class="line-top">Connect with us</h3>
						<ul class="social list-unstyled mb-5">
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-12">
							<div class="widget">
								<h3 class="line-top">Navigasi</h3>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4">
							<div class="widget">
								<ul class="links list-unstyled">
									<li><a href="#beranda">Beranda</a></li>
									<li><a href="#tentangkami">Tentang Kami</a></li>
									<li><a href="#karir">Karir</a></li>
									<li><a href="#kontal">Kontak</a></li>
								</ul>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4">
							<div class="widget">
								<ul class="links list-unstyled">
									<li><a href="login_user.php">Masuk</a></li>
									<li><a href="register.php">Daftar</a></li>
									
								</ul>
							</div>
						</div>
						
						<div class="col-6 col-sm-6 col-md-4">
							<div class="widget">
								<ul class="links list-unstyled">
									<li><a href="#">+621882773888</a></li>
									<li><a href="#">PBHPeradiPonorogo@gmail.com</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center text-center copyright">
				<div class="col-md-8">
					<p class="small text-black-50">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>
					</br>Distributed By <a href="https://themewagon.com/">Themewagon</a> <!-- License information: https://untree.co/license/ -->
					</p>
					
				</div>
			</div>
		</div>
	</div>


	
	<div class="modal fade" id="myModalSyarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					
					<h4 class="modal-title" id="myModalLabel">Syarat Penerimaan</h4>
				</div>
				<div class="modal-body-syarat">
				</div>
				
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="js/2/bootstrap.bundle.min.js"></script>
	<script src="js/2/tiny-slider.js"></script>
	<script src="js/2/aos.js"></script>
	<script src="js/2/glightbox.min.js"></script>
	<script src="js/2/navbar.js"></script>
	<script src="js/2/counter.js"></script>
	<script src="js/2/custom.js"></script>

		 <!-- js -->
		 <script src="js/jquery.js"></script>
		 <script src="js/bootstrap.min.js"></script>
		 <script src="js/jquery.smooth-scroll.min.js"></script>
		 <script src="js/jquery.dlmenu.js"></script>
		 <script src="js/wow.min.js"></script>
		 <script src="js/custom.js"></script>
	 
		 <script>
			 $(function(){
				 $(document).on('click','.show_rincian',function(e){
					 e.preventDefault();
					 $("#myModalSyarat").modal('show');
					 $.post('syarat_lamaran.php',
						 {id:$(this).attr('data-id')},
						 function(html){
							 $(".modal-body-syarat").html(html);
						 }   
					 );
				 });
			 });
		 </script>
</body>
</html>
