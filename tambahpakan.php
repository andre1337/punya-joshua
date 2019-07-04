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
		<h2 style="padding-left: 20px">Tambah Data Pakan Ikan</h2>
		<?php
			$carikode = mysql_query("select max(kd_pakan) from tb_pakan") or die (mysql_error());
			$datakode = mysql_fetch_array($carikode);
			if($datakode) {
				$nilaikode = substr($datakode[0], 1);
				$kode = (int) $nilaikode;
				$kode = $kode + 1;
				$hasilkode = "P" .str_pad($kode, 3, "0", STR_PAD_LEFT);
			} else {
				$hasilkode = "P001";
			}
		?>
		<form action="" method="post" enctype="multipart/form-data">
			<table width="800" border="0px" align="center" cellpadding="0" cellspacing="0">
				<tr height = "50">
						<td width="1%">&nbsp;</td>
						<td width="25%">&nbsp;</td>
					</tr>
				<tr height = "50">
					<td></td>
					<td>Kode Pakan</td>
					<td>:</td>
					<td><input type="text" name="kd_pakan" value="<?php echo"$hasilkode";?>" size="25" maxlength="20" placeholder="Kode Pakan" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Merk</td>
					<td>:</td>
					<td><input type="text" name="merk_pakan" size="25" maxlength="40" placeholder="Merk" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="file" name="gambar"></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" name="harga" size="25" maxlength="20" placeholder="Harga" /></td>
				</tr>
				<tr height="50">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="simpan" value="Simpan" class="button">
						<input type="reset" name="reset" value="Reset" class="button"></td>
				</tr>
			</table>
		</form>
		<?php
			$kd_pakan = @$_POST['kd_pakan'];
			$merk_pakan = @$_POST['merk_pakan'];
			$harga = @$_POST['harga'];

			$sumber = $_FILES['gambar']['tmp_name'];
			$target = 'img/';
			$nama_gambar = $_FILES['gambar']['name'];

			$simpan = @$_POST['simpan'];

			if($simpan) {
				if($kd_pakan == "" || $merk_pakan == "" || $nama_gambar == "" || $harga == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if($pindah) {
						mysql_query("insert into tb_pakan values('$kd_pakan', '$merk_pakan', '$nama_gambar', '$harga')") or die (mysql_error());
						echo"<script>alert('Data Berhasil di Inputkan');
						window.location.href='?page=tambahpakan';</script>";
					} else {
						echo"<script>alert('Gagal Memasukan Gambar');
						window.location.href='?page=tambahpakan';</script>";
					}
				}
			} 
		?>
	</div>
	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>