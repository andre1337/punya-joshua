<?php
@session_start();
include("koneksi.php");

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>
	<link rel="stylesheet" href="style.css" />
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<script type="text/javascript">
	</script>
</head>
<body>
	<div class="lg-container">
		<h2 style="color: #336666"><img src="img/GDM-Icon-Admin-Client.png" width="100px" align="left"></h2>
		<form action="" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" name="login" value="login"><a style = "text-decoration: none; color: #336666" href="formadmin.php?id_admin=<?php echo $data['id_admin']; ?>">Login</a></button>
			</div>

			<a href="index.php" id="back">Kembali</a>
			
		</form>
			<?php
				$user = @$_POST['username'];
				$pass = @$_POST['password'];
				$login = @$_POST['login'];


				if($login) {
					if($user == "" || $pass == "") {
						?> <script type="text/javascript">alert("Username atau Password tidak boleh kosong");</script> <?php
					} else {
						$sql = mysql_query("select * from admin where username = '$user' and password = '$pass'") or die (mysql_error());
						$data = mysql_fetch_array($sql);
						$cek = mysql_num_rows($sql);
						if($cek >=1) {
							$_SESSION['username']=$user;
							echo"<script>alert('Anda Berhasil Masuk, Terima Kasih')</script>";
							echo"<script>window.open('formadmin.php','_self')</script>";
						}else {

						}
					}

					}
			?>
		<div id="message"></div>
	</div>
</body>
</html>