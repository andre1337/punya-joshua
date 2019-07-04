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
		<h2 style="padding-left: 20px">Data Pakan Ikan</h2>
			<table width="924" border="1" align="center" cellpadding="0" cellspacing="0">
				<tr bgcolor="FF6600" >
					<th width="10%" height="42">Kode Pakan</td>&nbsp;
					<th width="30%">Merk</td>&nbsp;
					<th width="20%">Gambar</td>&nbsp;
					<th width="20%">Harga</td>&nbsp;
					<th width="25%">Opsi</td>   
				</tr>
				<?php
					$sql = mysql_query("select * from tb_pakan") or die (mysql_error());
					while($data = mysql_fetch_array($sql)) {
				?>
				<tr align="center"  bgcolor="#EEF2F7">
					<td height="32"><div align="center"><?php echo $data['kd_pakan']; ?></div></td>
					<td><div align="center"><?php echo $data['merk_pakan']; ?></div></td>
					<td><div align="center" style="padding-top: 4px"><img src="img/<?php echo $data['gambar']; ?>" width = "100px"></div></td>
					<td><div align="center">Rp. <?php echo $data['harga']; ?></div></td>
					<td><div align="center"><a href="editpakan.php?kd_pakan=<?php echo $data['kd_pakan']; ?>" style="text-decoration: none;">Edit</a> | <a nclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ?')" href="hapuspakan.php?kd_pakan=<?php echo $data['kd_pakan']; ?>" style="text-decoration: none;">Hapus</a></div></td>
				</tr>
			 	<?php
				}
				?>
			</table>
	</div>
	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>