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

			<h1 style="padding-bottom: 10px">Cara Pemesanan</h1>
			<div id="kiri">
			<h2 align="center">Tentang Kami</h2>
			<p align="justify" style="font-size: 12px;">e-fish adalah kelompok budidaya ikan air tawar di Indonesia yang menyediakan segala jenis bibit ikan air tawar. Kami siap melayani pemesanan dan pembelian benih ke seluruh Indonesia dengan kualitas ikan unggulan dan harga terjangkau.</p>

			<hr size="12px" style="border-color: #336666;">
			<h2 align="center">Hubungi Kami</h2>
			<p align="left"> Kontak&nbsp;: 085861940810</p>
			<p align="left">Alamat&nbsp;: Jl. A.H. Nasution no 18 RT 002/008 kel cipadung kec cibiru 40614</p>
			<p align="left">&nbsp;</p>
			<p align="center"><a href="http://facebook.com/"><img align="center" src="img/1480923675_online_social_media_facebook.png" width="40"></a>
			<a href="http://twitter.com/"><img align="center" src="img/1480923720_twitter_online_social_media.png" width="40"></a>
			<a href="http://googleplus.com/"><img align="center" src="img/1480923698_social-circle-google-plus.png" width="40"></p></a>
			</div>
			<ol>
				<li style="padding-bottom: 10px">Buka Web e-fish pada web browser anda</li>
				<li style="padding-bottom: 10px">Masuk ke form pemesanan, pilih pesan bibit ikan atau pakan ikan</li>
				<li style="padding-bottom: 10px">Selanjutnya isi data pribadi dan juga data pemesanan</li>
				<li style="padding-bottom: 10px">Klik pesan hingga muncul notifikasi</li>
				<li style="padding-bottom: 10px">Cetak tanda bukti pemesanan sebagai bukti bahwa Anda telah memesan</li>
				<li style="padding-bottom: 10px">Anda tinggal menunggu pesanan untuk dikirim kelokasi yang ditujukan</li>
			</ol>
			<h1 style="padding-bottom: 10px">Pengiriman</h1>
			<ol>
				<li style="padding-bottom: 10px">Pengiriman antar pulau dan propinsi dilakukan via pesawat terbang.</li>
				<li style="padding-bottom: 10px">Pengiriman akan dilakukan melalui jalan darat jika mampu dijangkau dalam waktu maksimum untuk pengiriman antar wilayah.</li>
				<li style="padding-bottom: 10px">Benih dikemas dalam plastik dan bok sterofoam.</li>
				<li style="padding-bottom: 10px">Benih akan langsung dikirim ke alamat Anda</li>
			</ol>
		</div>
	</div>
	<div id="footer">
		© 2016 by e-fish. All Rights Reserved
	</div>
</div>
	
</html>