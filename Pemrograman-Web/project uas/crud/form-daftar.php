<!DOCTYPE html>
<html> 
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title> 
</head>
<style>
h3 {
  text-align: center;
}
body {
  background-image: url('yelow.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
	<header>
	<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST"> 
		<fieldset>
		<p> <p align="center"
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<P> <p align="center"
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p> <p align="center"
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p> 
		<p> <p align="center"
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option> 
				<option>Kristen</option> 
				<option>Hindu</option> 
				<option>Budha</option> 
				<option>Atheis</option>
			</select>
		</p>
		<p> <p align="center"
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
		</p>
		<P>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset> 
	</form> 
	</body>
</html>