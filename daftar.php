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
	<h1>&nbsp;</h1>
			<form action="" method="post" enctype="multipart/form-data">
			<table width="800" border="0px" align="center" cellpadding="0" cellspacing="0">
				<tr height = "50">
						<td width="1%">&nbsp;</td>
						<td width="25%">&nbsp;</td>
					</tr>
				<tr height = "50">
					<td></td>
					<td style="font-family: caviar dreams; color: #fff">Username</td>
					<td style="font-family: caviar dreams; color: #fff">:</td>
					<td><input type="text" name="username" size="25" maxlength="20" placeholder="Username" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td style="font-family: caviar dreams; color: #fff">Password</td>
					<td style="font-family: caviar dreams; color: #fff">:</td>
					<td><input type="Password" name="password" size="25" maxlength="40" placeholder="Password" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td style="font-family: caviar dreams; color: #fff">Nama Lengkap</td>
					<td style="font-family: caviar dreams; color: #fff">:</td>
					<td><input type="text" name="nama" size="25" maxlength="20" placeholder="Nama lengkap" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td style="font-family: caviar dreams; color: #fff">Alamat</td>
					<td style="font-family: caviar dreams; color: #fff">:</td>
					<td><textarea name="alamat" size="50" placeholder="Alamat" /></textarea></td>
				</tr>
					<tr height = "50">
					<td>&nbsp;</td>
					<td style="font-family: caviar dreams; color: #fff">Email</td>
					<td style="font-family: caviar dreams; color: #fff">:</td>
					<td><input type="text" name="email" size="25" maxlength="20" placeholder="Email" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td style="font-family: caviar dreams; color: #fff">Telepon</td>
					<td style="font-family: caviar dreams; color: #fff">:</td>
					<td><input type="text" name="telepon" size="25" maxlength="20" placeholder="telepon" /></td>
				</tr>
				<tr height="50">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="daftar" value="daftar" class="button">
				</tr>
			</table>
			<a href="loginuser.php" style="font-family: goya; float: right; text-decoration: none; color: #fff">Kembali</a>
		</form>
		<?php
			$username = @$_POST['username'];
			$password = @$_POST['password'];
			$nama = @$_POST['nama'];
			$alamat = @$_POST['alamat'];
			$email = @$_POST['email'];
			$telepon = @$_POST['telepon'];

			$daftar = @$_POST['daftar'];

			if($daftar) {
				if($username == "" || $password == "" || $nama == "" || $alamat == "" || $email == "" || $telepon == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					mysql_query("insert into member values('', '$username', '$password', '$nama', '$alamat', '$email', '$telepon')") or die (mysql_error());
					echo"<script>alert('Data Berhasil di Inputkan')window.open('loginuser.php','_self')</script>";
				}
			} 
		?>
</div>
	
</html>