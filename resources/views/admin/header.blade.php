<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	// include 'cek.php';
	
	?>
	@include('admin/config')
	<title>APLIKASI PENDAFTARAN PKL</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href={{ asset('js/jquery-ui/jquery-ui.css') }}>
	<script type="text/javascript" src={{ asset('js/jquery.js') }}></script>
	<script type="text/javascript" src={{ asset('js/jquery.js') }}></script>
	<script type="text/javascript" src=assets/js/bootstrap.js></script>
	<script type="text/javascript" src=assets/js/jquery-ui/jquery-ui.js></script>	
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand">APLIKASI PENDAFTARAN PKL</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
				
				</ul>
			</div>
		</div>
	</div>
			
	<div class="col-md-2">
		<div class="row">
				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="{{ url('../logo1.png') }}">
					</a>
				</div>	
		</div>
		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="../admin/index.php">  Dashboard</a></li>			
			
			<style>
.dropbtn {
    background-color: white;
    color: #428bca;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #f1f1f1;
}
</style>

<div class="dropdown">
  <li><button class="dropbtn">Manajement Siswa</button></li>
  <div class="dropdown-content">
    <a href="{{ route('admin.bacadatasiswa') }}">Data Siswa</a>
    <a href="../admin/bacacalonpkl.php">Data Calon PKL</a>
    <a href="../admin/bacasiswapkl.php">Data Siswa PKL</a>
  </div>
</div>

			
  		<div class="dropdown">
  <li><button class="dropbtn"> Data Pembimbing</button></li>
  <div class="dropdown-content">
    <a href="{{ route('admin.bacadatapembimbinggg') }}">Pembimbing PKL</a>
    <a href="../karyatulis/bacakaryatulis.php">Pimbimbing Karya tulis</a>
  </div>
</div>

  			<div class="dropdown">
			<li><button class="dropbtn">  Cari</button></li>
			<div class="dropdown-content">
    <a href="{{ route('cari.siswa') }}">Siswa</a>
    <a href="{{ route('cari.pembimbing_pkl') }}">Pembimbing PKL</a>
    <a href="{{ route('cari.pembimbing_karyatulis') }}">Pembimbing Karya Tulis</a>
  </div>
  </div>
			<li><a href="../admin/bacaadmin.php"></span> Admin</a></li>
			<li><a href="/keluar1"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">