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
<div id="header"><h1>Form Penggunaan Mobil Operasional</h1></div>
<div class="content">
	<form>
		
		<div class="wrapper">
  			<form action="aksi.php" method="post">
   			<label for="tanggal"> Tanggal : </label>
    		<input type="text" id="input" size="15" name="tanggal" value="DD/MM/YYYY" />
   			</form>
 		</div><p>
		<label for="nama"> Nama Pencatat : </label> <select name="nama">
			<option>Candra</option>
			<option>Edy</option>
			<option>Feri</option>
		</select><p>
		<label for="plat"> Mobil yang digunakan : </label> <select name="plat">
			<option>B 2871 PFV - Kijang Innova Reborn</option>
			<option>B 2420 PFV - New Avanza</option>
			<option>B 2601 PFV - New Avanza</option>
		</select><p>
		<label for="driver"> Driver : </label> <select name="driver">
			<option>Pak Brutus</option>
			<option>Pak Dudu</option>
			<option>Pak Satrio</option>
		</select><p>
		<label for="user"> User : </label><input type="text" name="user"><p>
		<label for="keluar"> Jam Keluar : </label><input type="text" name="keluar"><p>
		<label for="keperluan"> Keperluan : </label> <textarea name="keperluan"></textarea><p>
		<label for="kembali"> Jam kembali : </label><input type="text" name="kembali"><p>
		<input type="submit" value="Kembali"/>
		<input type="submit" value="Kirim data"/>
	</form>
</center>
</div>
</body>
</html>