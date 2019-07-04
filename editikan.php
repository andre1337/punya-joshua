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
				<li><a href="">View Data</a></li>
			</ul>
			</li>
			</li>
			<li class="utama" style="float: right;"><a href="logoutadmin .php">Logout</a>
			</li>
		</ul>
	</div>

	<div id="isi">
		<h2 style="padding-left: 20px">Edit Data Ikan</h2>
		<?php
			$id_ikan = @$_GET['id_ikan'];
			$sql = mysql_query("select * from tb_ikan where id_ikan = '$id_ikan'") or die (mysql_error());
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
					<td>Kode Ikan</td>
					<td>:</td>
					<td><input type="text" name="id_ikan" value="<?php echo $data['id_ikan'];?>" size="25" maxlength="20" placeholder="Kode Ikan" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama_ikan" value="<?php echo $data['nama_ikan'];?>" size="25" maxlength="40" placeholder="Nama Ikan" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="file" name="gambar"></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>1 inchi</td>
					<td>: Rp.</td>
					<td><input type="text" name="harga" value="<?php echo $data['harga'];?>" size="25" maxlength="20" placeholder="Harga" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>2 inchi</td>
					<td>: Rp.</td>
					<td><input type="text" name="harga2" value="<?php echo $data['harga2'];?>" size="25" maxlength="20" placeholder="Harga" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>3 inchi</td>
					<td>: Rp.</td>
					<td><input type="text" name="harga3" value="<?php echo $data['harga3'];?>" size="25" maxlength="20" placeholder="Harga" /></td>
				</tr>
				<tr height="50">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="edit" value="Edit" class="button">
						<input type="reset" name="reset" value="Reset" class="button"></td>
				</tr>


			</table>
		</form>		
		<?php
			$id_ikan = @$_POST['id_ikan'];
			$nama_ikan = @$_POST['nama_ikan'];
			$harga = @$_POST['harga'];
			$harga2 = @$_POST['harga2'];
			$harga3 = @$_POST['harga3'];

			$sumber = $_FILES['gambar']['tmp_name'];
			$target = 'img/';
			$nama_gambar = $_FILES['gambar']['name'];

			$edit = @$_POST['edit'];

			if($edit) {
				if($nama_ikan == "" ||  $harga == "" ||  $harga2 == "" ||  $harga3 == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					if($nama_gambar == ""){
						mysql_query("update tb_ikan set nama_ikan = '$nama_ikan', harga = '$harga', harga2 = '$harga2', harga3 = '$harga3' where id_ikan = '$id_ikan' ") or die (mysql_error());
						echo"<script>alert('Data Berhasil di Edit');window.open('viewikan.php','_self')</script>";
					} else {
						$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
						if($pindah) {
							mysql_query("update tb_ikan set nama_ikan = '$nama_ikan', gambar = '$nama_gambar', harga = '$harga', harga2 = '$harga2', harga3 = '$harga3' where id_ikan = '$id_ikan' ") or die (mysql_error());
							echo"<script>alert('Data Berhasil di Edit');window.open('viewikan.php','_self')</script>";
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