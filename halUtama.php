<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<center>
		<h3>SELAMAT DATANG DI HALAMAN UTAMA</h3>
		<table bgcolor="pink">
		<form action="prosesHalUtama.php" method="POST">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" pattern="[A-Za-z ]{1,35}" title="Nama Maximal 35 Karakter">
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>
					<input type="text" name="nim" pattern="[0-9]{10}" title="Nim Maximal 10 Karakter Serta Harus Angka">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<input type="radio" name="kelas" value="MI4101">MI4101<br>
					<input type="radio" name="kelas" value="MI4102">MI4102<br>
					<input type="radio" name="kelas" value="MI4103">MI4103<br>
					<input type="radio" name="kelas" value="MI4104">MI4104
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
						<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
						<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>
					<input type="checkbox" name="hobby[]" value="Menulis">Menulis
					<input type="checkbox" name="hobby[]" value="Membaca">Membaca
					<input type="checkbox" name="hobby[]" value="Makan">Makan
					<input type="checkbox" name="hobby[]" value="Tidur">Tidur
					<input type="checkbox" name="hobby[]" value="Belajar">Belajar<br>
					<input type="checkbox" name="hobby[]" value="Berenang">Berenang
					<input type="checkbox" name="hobby[]" value="Basket">Basket
					<input type="checkbox" name="hobby[]" value="Badminton">Badminton
					<input type="checkbox" name="hobby[]" value="Nonton">Nonton
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
						<select name="fakultas">
							<option value="fit">Fakultas Ilmu Terapan</option>
							<option value="fik">Fakultas Industri Kreatif</option>
							<option value="fkb">Fakultas Komunikasi Bisnis</option>
							<option value="feb">Fakultas Ekonomi Bisnis</option>
							<option value="fri">Fakultas Rekayasa Industri</option>
							<option value="fif">Fakultas Informatika</option>
							<option value="fte">Fakultas Teknik Elektro</option>

						</select>
					</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<textarea name="alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>

		</form>
	</table>
	<a href="logOut.php">LogOut</a>
</body>
</html>