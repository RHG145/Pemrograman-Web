<! DOCTYPE html>
<html> 
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title> 
</head>
<style>
h1 {
  text-align: center;
}
h3 {
  text-align: center;
}
h4 {
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
	<h3>Pendaftaran Siswa Baru </h3> 
	<h1>SMK Coding</h1>
	</header>
	<h4>Menu</h4>
	<nav>
	<?php if(isset($_GET['status'])): ?> 
	<P>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div align='center'> Pendaftaran siswa baru berhasil!</div>"; 
			} else {
				echo "Pendaftaran gagal!"; 
			}
		?>
	</p>
<?php endif; ?> 
         <ul> 
		 <p align="center"
			<li><a href="form-daftar.php">Daftar Baru</a></li> 	</p> <p align="center"
			<li><a href="list-siswa.php">Pendaftar</a></li> </p>
		
		</ul> 
	</nav>
	</body> 
</html>