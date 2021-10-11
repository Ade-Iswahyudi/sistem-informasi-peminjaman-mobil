<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
 <title>Implementasi Tanggal</title>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script type="text/javascript">
   $(function() {
     $( "#input" ).datepicker({
     changeMonth: true,
     changeYear: true
     });
   });
 </script>
</head>
<body>
<center>
<div id="header"><h1>Form Peminjaman Unit Mobil</h1></div>
<div class="content">
	<form>
		<div class="wrapper">
  			<form action="aksi.php" method="post">
   			<label for="tanggal"> Tanggal : </label>
    		<input type="text" id="input" size="15" name="tanggal" value="DD/MM/YYYY" />
   			</form>
 		</div><p>
		<label for="nama"> Nama Lengkap : </label> <input type="text" name="nama"><p>
		<label for="fungsi"> Fungsi : </label> <select name="
		fungsi">
			<option>Koordinator</option>
			<option>Engineer</option>
			<option>Teknisi</option>
			<option>Admin</option>
			<option>Security</option>
			<option>Driver</option>
			<option>OB</option>
		</select><p>
		<label for="plat"> Mobil yang digunakan : </label> <select name="plat">
			<option>B 2871 PFV - Kijang Innova Reborn</option>
			<option>B 2420 PFV - New Avanza</option>
			<option>B 2601 PFV - New Avanza</option>
		</select><p>
		<label for="keperluan"> Keperluan : </label> <textarea name="keperluan"></textarea><p>
			<label for="lamahari"> Lama Hari : </label><select>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		<label for="hari"> hari </label><p>
		<input type="submit" value="Kembali"/>
		<input type="submit" value="Kirim data"/>
	</form>
</center>
</div>
</body>
</html>