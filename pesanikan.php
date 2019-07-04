a<?php
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
		<h2 style="padding-left: 20px">Pesan Bibit Ikan</h2>
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
					<td><input type="text" name="email" size="25" maxlength="40" placeholder="Email" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Bibit</td>
					<td>:</td>
					<td><select id="ikan" name="bibit_ikan">
    					<option>Pilih Bibit Ikan</option>
    		              <?php
			                $query = mysql_query("SELECT * FROM tb_ikan ORDER BY nama_ikan");
			                while ($row = mysql_fetch_array($query)) {
			                ?>
			                    <option value="<?php echo $row['nama_ikan']; ?>">
			                        <?php echo $row['nama_ikan']; ?>
			                    </option>
			                <?php
			                }
               			 ?>
                </select></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Ukuran</td>
					<td>:</td>
					<td> <select name="ukuran">  
						 <option>Pilih Ukuran</option>  
						 <option>1 inchi</option>  
						 <option>2 inchi</option>  
						 <option>3 inchi</option>  
						 </select> </td>
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
					<td><input type="text" name="jumlah" size="7" maxlength="20" placeholder="Jumlah Beli" />&nbsp;Ekor</td>
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
			        <td>Ikan Mas</td>
			        <td>1inchi = 250, 2 inchi= 350, 3inchi=450/ ekor</td>
			    </tr>
			    <tr>
			        <td>Ikan Gurame</td>
			        <td>1inchi = 250, 2 inchi= 350, 3inchi=450/ ekor</td>
			    </tr>
			    <tr>
			        <td>Ikan Nila</td>
			        <td>1inchi = 200, 2 inchi= 300, 3inchi=400/ ekor</td>
			    </tr>
			    <tr>
			        <td>Ikan Lele</td>
			        <td>1inchi = 200, 2 inchi= 300, 3inchi=400/ ekor</td>
			    </tr>
			</table>
		</form>
		<?php
			$nama = @$_POST['nama_pembeli'];
			$alamat = @$_POST['alamat'];
			$telepon = @$_POST['no_telepon'];
			$email = @$_POST['email'];
			$bibit_ikan = @$_POST['bibit_ikan'];
			$ukuran = @$_POST['ukuran'];
			$harga = @$_POST['harga'];
			$jumlah = @$_POST['jumlah'];
			$tot=$harga*$jumlah;

			$pesan = @$_POST['pesan'];

			if($pesan) {
				if($nama == "" || $alamat == "" || $telepon == "" || $email == "" || $bibit_ikan == "" || $ukuran == ""|| $harga == ""|| $jumlah == "" || $tot == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					mysql_query("insert into transaksi values('', '$nama', '$alamat', '$telepon', '$email', '$bibit_ikan', '$ukuran', '$harga', '$jumlah', '$tot')") or die (mysql_error());
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