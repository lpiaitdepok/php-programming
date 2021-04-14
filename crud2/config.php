<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "databasename"

//koneksi ke database mysql, silahkan di rubah dengan koneksi database sendiri
$koneksi = mysql_connect($host,$username,$password);
mysql_select_db($databasename);
//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysql_errno ($koneksi)){
	echo "Gagal melakukan koneksi ke MySQL: " . mysql_error($koneksi);
}
?>
