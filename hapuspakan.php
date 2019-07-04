<?php
	include("koneksi.php");
	$kd_pakan = @$_GET['kd_pakan'];

	mysql_query("delete from tb_pakan where kd_pakan = '$kd_pakan'") or die (mysql_error());
?>

<script>window.open('viewpakan.php','_self')</script>";