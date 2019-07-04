<?php
	include("koneksi.php");
	$id_ikan = @$_GET['id_ikan'];

	mysql_query("delete from tb_ikan where id_ikan = '$id_ikan'") or die (mysql_error());
?>

<script>window.open('viewikan.php','_self')</script>";