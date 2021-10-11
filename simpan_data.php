<?php
	$id				= $_POST['id'];
	$tanggal		= $_POST['tanggal'];
	$nama_security	= $_POST['nama_security'];
	$plat			= $_POST['plat'];
	$driver			= $_POST['driver'];
	$user			= $_POST['user'];
	$jam_kel		= $_POST['jam_kel'];
	$keperluan		= $_POST['keperluan'];

	include "koneksiDB.php";
	mysqli_query("insert into kiri(id, tanggal, nama_security, plat, driver, user, jam_kel, keperluan) values (
		'$id',
		'$tanggal',
		'$nama_security',
		'$plat',
		'$driver',
		'$user',
		'$jam_kel',
		'$keperluan')") or die ("Menyimpan data GAGAL <meta http-equiv=refresh content=3;url=operasional.php>");
	echo "Menyimpan data BERHASIL <meta http-equiv=refresh content=3;url=operasional.php";
?>