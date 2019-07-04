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
		<h2 style="padding-left: 20px">Pesan Pakan Ikan</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table width="800" border="0px" align="center" cellpadding="0" cellspacing="0">
				<tr height = "50">
						<td width="1%">&nbsp;</td>
						<td width="25%">&nbsp;</td>
					</tr>
				<tr height = "50">
					<td></td>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama_pembeli" size="25" maxlength="20" placeholder="Nama" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" size="50" placeholder="Alamat" /></textarea></td>
				</tr>
					<tr height = "50">
					<td>&nbsp;</td>
					<td>No. Telepon</td>
					<td>:</td>
					<td><input type="text" name="no_telepon" size="25" maxlength="20" placeholder="No. Telepon" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" size="25" maxlength="20" placeholder="Email" /></td>
				</tr>

				<tr height = "50">
					<td>&nbsp;</td>
					<td>Pakan</td>
					<td>:</td>
					<td><select name="pakan">
    					<option>Pilih Pakan Ikan</option>
    					<?php
    						$sql = mysql_query("SELECT * FROM tb_pakan ORDER BY merk_pakan ASC");
    						if(mysql_num_rows($sql) != 0){
        					while($data = mysql_fetch_assoc($sql)){
            				echo '<option>'.$data['merk_pakan'].'</option>';
					      	  }
    						}
    					?></select></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" name="harga" size="7" maxlength="20" placeholder="Harga" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Jumlah Beli</td>
					<td>:</td>
					<td><input type="text" name="jumlah" size="7" maxlength="20" placeholder="Jumlah Beli" /></td>
				</tr>
				<tr height="50">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="pesan" value="Pesan" class="button">
						<input type="reset" name="batal" value="Batal" class="button"></td>
				</tr>
			<table border="1" style="margin-top: 25px; margin-left: 80px;" align="left">
			    <tr>
			        <td>Safir</td>
			        <td>Rp. 8600</td>
			    </tr>
			    <tr>
			        <td>Medali</td>
			        <td>Rp. 8600</td>
			    </tr>
			    <tr>
			        <td>Pakan Ikan Lele Safir</td>
			        <td>Rp. 8600</td>
			    </tr>
			    <tr>
			        <td>Nanolis</td>
			        <td>Rp. 17500</td>
			    </tr>

			</table>
		</form>		
		<?php
			$nama = @$_POST['nama_pembeli'];
			$alamat = @$_POST['alamat'];
			$telepon = @$_POST['no_telepon'];
			$email = @$_POST['email'];
			$pakan = @$_POST['pakan'];
			$harga = @$_POST['harga'];
			$jumlah = @$_POST['jumlah'];
			$tot = $harga*$jumlah;

			$pesan = @$_POST['pesan'];

			if($pesan) {
				if($nama == "" || $alamat == "" || $telepon == "" || $email == "" || $pakan == "" || $harga == "" || $jumlah == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					mysql_query("insert into transaksip values('', '$nama', '$alamat', '$telepon', '$email', '$pakan', '$harga', '$jumlah', '$tot')") or die (mysql_error());
					echo"<script>window.open('konfirmasi.php','_self')</script>";
				}
			} 
		?>
	</div>
	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>