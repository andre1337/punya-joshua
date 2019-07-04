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
		<h2 style="padding-left: 20px">Data Transaksi Pemesanan Pakan Ikan</h2>
			<table width="924" border="1" align="center" cellpadding="0" cellspacing="0">
				<tr bgcolor="FF6600" >
					<th width="10%" height="42">Kode Transaksi</td>&nbsp;
					<th width="20%">Nama Pembeli</td>&nbsp;
					<th width="20%">Alamat</td>&nbsp;
					<th width="15%">No. Telepon</td>&nbsp;
					<th width="15%">Email</td>&nbsp; 
					<th width="25%">Pakan</td>&nbsp; 
					<th width="25%"> Harga</td>&nbsp; 
					<th width="10%"> Jumlah</td>&nbsp;
					<th width="25%"> Total Pembayaran</td>&nbsp;    
				</tr>
				<?php
					$sql = mysql_query("select * from transaksip order by id_transaksi asc") or die (mysql_error());
					while($data = mysql_fetch_array($sql)) {
				?>
				<tr align="center"  bgcolor="#EEF2F7">
					<td height="32"><div align="center"><?php echo $data['id_transaksi']; ?></div></td>
					<td><div align="center"><?php echo $data['nama_pembeli']; ?></div></td>
					<td><div align="center" style="padding-top: 4px"><?php echo $data['alamat']; ?></div></td>
					<td><div align="center"><?php echo $data['no_telepon']; ?></div></td>
					<td><div align="center"><?php echo $data['email']; ?></div></td>
					<td><div align="center"><?php echo $data['pakan']; ?></div></td>
					<td><div align="center"><?php echo $data['harga']; ?></div></td>
					<td><div align="center"><?php echo $data['jumlah']; ?></div></td>
					<td><div align="center"><?php echo $data['total']; ?></div></td>

				</tr>
			 	<?php
				}
				?>
			</table>
			<br>
			<div class="button" style="margin-left: 20px; text-align: center; padding-top: 5px; "><a href="cetakp.php" style="text-decoration: none; color: #fff;" target="new">Cetak</a></div>
	</div>
	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>