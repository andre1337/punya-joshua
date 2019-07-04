<?php
@session_start();
include("koneksi.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Pemesanan</title>
</head>
<link href="css/style.css" type="text/css" rel="stylesheet">
<body>
<div id="canvas">
	<h1 align="CENTER" style="padding-top: 150px; font-family: Arial Black; color: #000;">TERIMA KASIH SUDAH BERBELANJA DI E-FISH</h1>
	<p align="center" style="font-family: Letter Gothic Std;">Dengan ini Anda telah melakukan transaksi pemesanan bibit & pakan ikan</p>
	<p align="center" style="font-family: Letter Gothic Std;">Selanjutnya Anda akan dikonfirmasi melalui nomor kontak yang telah anda sertakan</p>
	<p align="center" style="font-family: Letter Gothic Std;">Dan bibit & pakan ikan yang telah Anda pesan akan dikirim langsung ke alamat tujuan Anda</p>
	<br>
	<a href="index.php" style="padding-left: 400px; text-decoration: none; color: #336666; font-family: Arial Black; ">Halaman Utama</a>
	<a href="bukti.php" style="padding-left: 400px; text-decoration: none; color: #336666; font-family: Arial Black; " target="new">Cetak Bukti Pemesanan</a>
</div>
</body>
</html>