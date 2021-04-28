<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP MySQLi 1</title>
	
</head>
<body>
	<div>
		<h1>CRUD PHP MySQLi</h1>

		<a href="index.php">Home</a>
		<a href="tambah.php">Tambah</a>
	

		<h2>Edit Mahasiswa</h2>
		
		<hr>
		
		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'") or die(mysqli_error($koneksi));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo 'ID tidak ada dalam database.';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$jenis_kelamin	= $_POST['jenis_kelamin'];
			$jurusan		= $_POST['jurusan'];
			
			$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan' WHERE id='$id'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
			}else{
				echo 'Gagal melakukan proses edit data.';
			}
		}
		?>
		
		<form action="edit.php?id=<?php echo $id; ?>" method="post">
			<div>
				<label>NIM</label>
				<div>
					<input type="text" name="nim" size="4" value="<?php echo $data['nim']; ?>" readonly required>
				</div>
			</div>
			<div>
				<label>NAMA MAHASISWA</label>
				<div>
					<input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
				</div>
			</div>
			<div>
				<label>JENIS KELAMIN</label>
				<div>
					<div>
						<input type="radio" name="jenis_kelamin" value="LAKI-LAKI" <?php if($data['jenis_kelamin'] == 'LAKI-LAKI'){ echo 'checked'; } ?> required>
						<label>LAKI-LAKI</label>
					</div>
					<div>
						<input type="radio" name="jenis_kelamin" value="PEREMPUAN" <?php if($data['jenis_kelamin'] == 'PEREMPUAN'){ echo 'checked'; } ?> required>
						<label>PEREMPUAN</label>
					</div>
				</div>
			</div>
			<div>
				<label>JURUSAN</label>
				<div>
					<select name="jurusan" required>
						<option value="">PILIH JURUSAN</option>
						<option value="TEKNIK INFORMATIKA" <?php if($data['jurusan'] == 'TEKNIK INFORMATIKA'){ echo 'selected'; } ?>>TEKNIK INFORMATIKA</option>
						<option value="TEKNIK SIPIL" <?php if($data['jurusan'] == 'TEKNIK SIPIL'){ echo 'selected'; } ?>>TEKNIK SIPIL</option>
						<option value="PERTANIAN" <?php if($data['jurusan'] == 'PERTANIAN'){ echo 'selected'; } ?>>PERTANIAN</option>
					</select>
				</div>
			</div>
			<div>
				<label>&nbsp;</label>
				<div>
					<input type="submit" name="submit" value="SIMPAN">
					<a href="index.php">KEMBALI</a>
				</div>
			</div>
		</form>
		
	</div>
	
</body>
</html>
