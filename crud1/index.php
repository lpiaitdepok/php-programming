<?php
//memasukkan file config.php
include('config.php');
?>
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
	
		<h2>Daftar Mahasiswa</h2>
		
		<table>
			<thead>
				<tr>
					<th>NO.</th>
					<th>NIM</th>
					<th>NAMA MAHASISWA</th>
					<th>JENIS KELAMIN</th>
					<th>JURUSAN</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nim'].'</td>
							<td>'.$data['nama'].'</td>
							<td>'.$data['jenis_kelamin'].'</td>
							<td>'.$data['jurusan'].'</td>
							<td>
								<a href="edit.php?id='.$data['id'].'">Edit</a>
								<a href="delete.php?id='.$data['id'].'" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
		
	</div>
	
</body>
</html>
