<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP MySQLi 1</title>
	
</head>
<body>
		<a href="#">CRUD PHP MySQLi</a>
		<p></p>
			<a href="index.php">Home</a>
			<a href="tambah.php">Tambah</a>
	
		<h2>Tambah Mahasiswa</h2>
		
		<hr>
		
		<?php
		if(isset($_POST['submit'])){
			$nim			= $_POST['nim'];
			$nama			= $_POST['nama'];
			$jenis_kelamin	= $_POST['jenis_kelamin'];
			$jurusan		= $_POST['jurusan'];
			
			$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'") or die(mysqli_error($koneksi));
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama, jenis_kelamin, jurusan) VALUES('$nim', '$nama', '$jenis_kelamin', '$jurusan')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="tambah.php";</script>';
				}else{
					echo '<div>Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div>Gagal, NIM sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="tambah.php" method="post">
			<div>
				<label>NIM</label>
				<div>
					<input type="text" name="nim" size="4" required>
				</div>
			</div>
			<div>
				<label>NAMA MAHASISWA</label>
				<div>
					<input type="text" name="nama" required>
				</div>
			</div>
			<div>
				<label>JENIS KELAMIN</label>
				<div>
					<div>
						<input type="radio" name="jenis_kelamin" value="LAKI-LAKI" required>
						<label>LAKI-LAKI</label>
					</div>
					<div>
						<input type="radio" name="jenis_kelamin" value="PEREMPUAN" required>
						<label>PEREMPUAN</label>
					</div>
				</div>
			</div>
			<div>
				<label>JURUSAN</label>
				<div>
					<select name="jurusan" required>
						<option value="">PILIH JURUSAN</option>
						<option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
						<option value="TEKNIK SIPIL">TEKNIK SIPIL</option>
						<option value="PERTANIAN">PERTANIAN</option>
					</select>
				</div>
			</div>
			<div>
				<label>&nbsp;</label>
				<div>
					<input type="submit" name="submit" value="SIMPAN">
				</div>
			</div>
		</form>
		
	
</body>
</html>
