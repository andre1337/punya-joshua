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
			</li>
			<li class="utama"><a href="tambahadmin.php">Kelola Admin</a>
			<li class="utama" style="background-color:#f60;  float: right; "><a href="logoutadmin.php">Logout</a>
			</li>
		</ul>
	</div>

	<div id="isi">
		<h2 style="padding-left: 20px">Kelola Admin</h2>
			<table border="5px solid" align="center" style="border-color: #336666; border-radius: 10px; padding: 10px;">
				<tr><br />
					<td width="300" style="text-align:center; border-radius: 10px; border-color: #336666;"><a href="tambahadmin.php"><img src="img/administrator_add.png" width = "200px" height = "200px"></a></td>
					<td style="text-align: center; border-radius: 10px; border-color: #336666;" width="300" height="300"><img src="img/FileSeek.png" width = "200px" height = "200px">
					</td>
				</tr>
			</table>
	</div>

	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>