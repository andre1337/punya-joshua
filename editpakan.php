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
			<li class="utama" style="float: right;"><a href="logoutadmin.php">Logout</a>
			</li>
		</ul>
	</div>

	<div id="isi">
		<h2 style="padding-left: 20px">Tambah Data Pakan Ikan</h2>
		<?php
			$kd_pakan = @$_GET['kd_pakan'];
			$sql = mysql_query("select * from tb_pakan where kd_pakan = '$kd_pakan'") or die (mysql_error());
			$data = mysql_fetch_array($sql);

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
					<td><input type="text" name="kd_pakan" value="<?php echo $data['kd_pakan'];?>" size="25" maxlength="20" placeholder="Kode Pakan" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Merk</td>
					<td>:</td>
					<td><input type="text" name="merk_pakan" value="<?php echo $data['merk_pakan'];?>" size="25" maxlength="40" placeholder="Merk" /></td>
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
					<td><input type="text" name="harga"  value="<?php echo $data['harga'];?>" size="25" maxlength="20" placeholder="Harga" /></td>
				</tr>
				<tr height="50">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="edit" value="edit" class="button">
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

			$edit = @$_POST['edit'];

			if($edit) {
				if($merk_pakan == "" ||  $harga == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					if($nama_gambar == ""){
						mysql_query("update tb_pakan set merk_pakan = '$merk_pakan', harga = '$harga' where kd_pakan = '$kd_pakan' ") or die (mysql_error());
						echo"<script>alert('Data Berhasil di Edit');window.open('viewikan.php','_self')</script>";
					} else {
						$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
						if($pindah) {
							mysql_query("update tb_pakan set merk_pakan = '$merk_pakan', gambar = '$nama_gambar', harga = '$harga' where kd_pakan = '$kd_pakan' ") or die (mysql_error());
							echo"<script>alert('Data Berhasil di Edit');window.open('viewpakan.php','_self')</script>";
						} else {
							echo"<script>alert('Gagal Memasukan Gambar');
							window.location.href='?page=tambahikan';</script>";
						}
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