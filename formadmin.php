<?php
@session_start();
include("koneksi.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>e-fish</title>
</head>
<link href="css/style.css" type="text/css" rel="stylesheet">
<body>

</body>
<div id="canvas">
	<div id="header">
	</div>

	<div id="menu">
		<ul>
			<li class="utama"><a href="formadmin.php">Beranda</a></li>
			<li class="utama"><a href="">Bibit Ikan</a>
			<ul>
				<li><a href="tambahikan.php">Tambah Data</a></li>
				<li><a href="viewikan.php">View Data</a></li>
			</ul>
			</li>
			<li class="utama"><a href="">Pakan Ikan</a>
			<ul>
				<li><a href="tambahpakan.php">Tambah Data</a></li>
				<li><a href="viewpakan.php">View Data</a></li>
			</ul>
			</li>
			</li>
			<li class="utama"><a href="">Laporan</a>
			<ul>
				<li><a href="laporanikan.php">Bibit Ikan</a></li>
				<li><a href="laporanpakan.php">Pakan Ikan</a></li>
			</ul>
			<li class="utama"><a href="tambahadmin.php">Kelola Admin</a>
			</li>
			<li class="utama" style="background-color:#f60;  float: right; "><a href="logoutadmin.php">Logout</a>
			</li>
		</ul>
	</div>

	<div id="isi">
		<h1 style="padding-left: 20px">Administrator</h1>
		<h1>&nbsp;</h1>
		<img src="img/administrator_add.png" style="padding-left:345px;">
		<br>
		<h2 align="center">SELAMAT DATANG!  <?php echo $_SESSION['username'];?></h2>
		<a style="padding-left: 150px; padding-right: 150px;">

		</a>
	</div>

	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>