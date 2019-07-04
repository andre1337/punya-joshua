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
		<div id="contents">
			<h1 style="padding-bottom: 10px">Daftar Bibit Ikan</h1>
			<div id="kiri">
			<h2 align="center">Tentang Kami</h2>
			<p align="justify" style="font-size: 12px;">e-fish adalah kelompok budidaya ikan air tawar di Indonesia yang menyediakan segala jenis bibit ikan air tawar. Kami siap melayani pemesanan dan pembelian benih ke seluruh Indonesia dengan kualitas ikan unggulan dan harga terjangkau.</p>

			<hr size="12px" style="border-color: #336666;">
			<h2 align="center">Hubungi Kami</h2>
			<p align="left"> Kontak&nbsp;: 085861940810</p>
			<p align="left">Alamat&nbsp;: Jl. A.H. Nasution no 18 RT 002/008 kel cipadung kec cibiru 40614</p>
			<p align="left">&nbsp;</p>
			<p align="center"><a href="http://facebook.com/"><img align="center" src="img/1480923675_online_social_media_facebook.png" width="40"></a>
			<a href="http://twitter.com/"><img align="center" src="img/1480923720_twitter_online_social_media.png" width="40"></a>
			<a href="http://googleplus.com/"><img align="center" src="img/1480923698_social-circle-google-plus.png" width="40"></p></a>
			</div>
			<?php
				$sql = mysql_query("select * from tb_ikan") or die (mysql_error());
				while($data = mysql_fetch_array($sql)) {
			?>
				<table border="1px solid #336666">
					<tr><br />
						<td width="300" style="text-align:center; "><img src="img/<?php echo $data['gambar']; ?>" width = "100px" height = "100px"></td>
						<td style="vertical-align: top" width="300">
						&nbsp;<?php echo $data['nama_ikan'];?><br /><br />
						&nbsp;Harga 1 inchi Rp. <?php echo $data['harga'];?>/Ekor<br /><br />
						&nbsp;Harga 2 inchi Rp. <?php echo $data['harga2'];?>/Ekor<br /><br />
						&nbsp;Harga 3 inchi Rp. <?php echo $data['harga3'];?>/Ekor
						</td>
					</tr>
				</table>
				<?php
				}
				?>
		</div>
	</div>

	<div id="footer">
		Copyright 2016 e-fish
	</div>
</div>
	
</html>