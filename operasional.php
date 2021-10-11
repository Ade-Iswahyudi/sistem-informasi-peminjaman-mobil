<form method="post" action="simpan_data.php">
	<table border="0" align="center">
		<tr>
			<td colspan="3" align="center"><h2> Form Inputan </h2></td>
		</tr>
		<tr>
			<td>Ke</td>
			<td>:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal" value="2019-08-31" min="2019-01-01" max="2022-12-31"/></td>
		</tr>
		<tr>
			<td>Nama Pencatat</td>
			<td>:</td>
			<td>
				<select name="nama_security">
					<option value="1">Pak Candra</option>
					<option value="2">Pak Edi</option>
					<option value="3">Pak Feri</option>
			</td>
		</tr>
		<tr>
			<td>Mobil yang digunakan</td>
			<td>:</td>
			<td>
				<select name="plat">
					<option>B 2871 PFV - Kijang Innova Reborn</option>
					<option>B 2420 PFV - New Avanza</option>
					<option>B 2601 PFV - New Avanza</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Driver</td>
			<td>:</td>
			<td><input type="text" name="driver"></td>
		</tr>
		<tr>
			<td>User</td>
			<td>:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Jam Keluar</td>
			<td>:</td>
			<td><input type="time" name="jam_kel"></td>
		</tr>
		<tr>
			<td>Keperluan</td>
			<td>:</td>
			<td><textarea name="keperluan"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value ="Simpan" />
				<input type="reset" value="Reset"/></td>
		</tr>
	</table>
</form>