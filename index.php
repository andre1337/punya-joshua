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
			<li class="utama"><a href="index.php">Beranda</a></li>
			<li class="utama"><a href="bibitikan.php">Bibit Ikan</a></li>
			<li class="utama"><a href="pakanikan.php">Pakan Ikan</a></li>
			<li class="utama"><a href="carapemesanan.php">Cara Pemesanan</a></li>
			<li class="utama"><a href="">Pesan</a>
			<ul>
				<li><a href="pesanikan.php">Bibit Ikan</a></li>
				<li><a href="pesanpakan.php">Pakan Ikan</a></li>
			</ul>
			</li>
			<li class="utama" style="float: right;"><a href="login.php">Administrator</a></li>
		</ul>
	</div>

	<div id="isi">
	<div id="contents">
		<p style="padding-bottom: 1px">&nbsp;</p>
		<div id="adbox">
		<img src="img/benihnilanirwana-600x300.jpg" alt="Img" width="852" height="291">
			<h1>SELAMAT DATANG</h1>
				<p align="justify">
					Web kami menyediakan aneka macam benih ikan unggul dan bermutu tinggi. Jenis benih ikan yang kami sediakan meliputi patin, bawal, mas, koi, nila, gurami, lele, dan masih banyak lagi. Kami juga melayani pengiriman benih ikan hingga ke luar kota maupun luar pulau, baik melalui darat ataupun udara. Bibit ikan yang kami produksi dan kami jual adalah bibit berkualitas dan dilakukan dengan cara penanganan yang baik dan benar. Hal ini terbukti dari informasi pembeli bahwa benih hasil dari produksi kami dapat berkembang dengan baik dan cepat pula pertumbuhannya.
				</p>
			</div>
			<div id="bar">
					<div class="section">
						<a href="bibitikan.php"><img src="img/bibitikan2.png" alt="Img" ></a>
					</div>
					<div class="section">
						<a href="pakanikan.php"><img src="img/pakanikan2.png" alt="Img" ></a>
					</div>
					<div class="section">
						<a href="carapemesanan.php"><img src="img/carapemesanan2.png" alt="Img" width="270" height="147"></a>
					</div>
				</div>
		</div>
	</div>
	<div id="footer">
	© 2016 by e-fish. All Rights Reserved
	</div>
</div>
	
</html>