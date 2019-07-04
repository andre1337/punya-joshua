		<ul>
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
			</li>
			<li class="utama"><a href="tambahadmin.php">Kelola Admin</a>
			<li class="utama" style="background-color:#f60;  float: right; "><a href="logoutadmin.php">Logout</a>
			</li>
		</ul>
	</div>

	<div id="isi">
		<h2 style="padding-left: 20px">Tambah Admin</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<table width="800" border="0px" align="center" cellpadding="0" cellspacing="0">
				<tr height = "50">
						<td width="1%">&nbsp;</td>
						<td width="25%">&nbsp;</td>
					</tr>
				<tr height = "50">
					<td></td>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" size="25" maxlength="20" placeholder="Username" /></td>
				</tr>
					<tr height = "50">
					<td>&nbsp;</td>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" size="25" maxlength="20" placeholder="Password" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="25" maxlength="40" placeholder="Nama" /></td>
				</tr>
				<tr height = "50">
					<td>&nbsp;</td>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" size="25" maxlength="40" placeholder="Email" /></td>
				</tr>
				<tr height="50">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><input type="submit" name="tambah" value="Tambah" class="button">
						<input type="reset" name="batal" value="Reset" class="button"></td>
				</tr>


			</table>
		</form>		
		<?php
			$username = @$_POST['username'];
			$password = @$_POST['password'];
			$nama = @$_POST['nama'];
			$email = @$_POST['email'];
;

			$tambah = @$_POST['tambah'];

			if($tambah) {
				if($username == "" || $password == "" || $nama == "" || $email == "") {
					echo"<script>alert('Inputan Tidak Boleh Kosong')</script>";
				} else {
					mysql_query("insert into admin values('', '$username', '$password', '$nama', '$email')") or die (mysql_error());
					echo"<script>alert('Data Berhasil di Edit');window.open('menuadmin.php','_self')</script>";
				}
			} 
		?>
	</div>
	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>