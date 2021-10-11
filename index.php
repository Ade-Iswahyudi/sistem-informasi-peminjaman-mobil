<!DOCTYPE html>
<html>
<head>
	<title> Sistem Peminjaman dan Pencatatan KM Mobil  (SiPeDaPeKil)</title>
</head>
<body>
<center>
	<h1>Selamat datang</h1>
	<img src="images/logo_pgncom01.jpg" alt="Logo" width=300 height=300><img src="images/logo_gasnet01.jpg" alt="Logo" width=275 height=350><p><br>

	<h3>Silahkan pilih menu</h3>
	<a href="catatkm.php">Laporan Pencatatan KM Mobil</a><p>
	<a href="pinjam.php">Peminjaman Mobil</a><p><br>
	<?php
		echo date("l F jS, Y - H:i:s", time());
	?>
</center>
</body>
</html>