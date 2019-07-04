<?php
@session_start();
include("koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pembelian</title>
</head>
<body>
<h1>Bukti Pemesanan Bibit Ikan</h1>
	<table border="1px solid" style="border-color: #336666;" width="200px">
		<tr><br />
			<td>Transaksi</td>
			<td></td>
		</tr>
		<tr><br />
			<td>Nama Pembeli</td>
			<td></td>
		</tr>
		<tr><br />
			<td>Alamat</td>
			<td></td>
		</tr>
		<tr><br />
			<td>No Telepon</td>
			<td></td>
		</tr>
		<tr><br />
			<td>Bibit Ikan</td>
			<td></td>
		</tr>
		<tr><br />
			<td>Jumlah Beli</td>
			<td></td>
		</tr>
		<tr><br />
			<td>Total Bayar</td>
			<td></td>
		</tr>
	</table>
</body>
</html>