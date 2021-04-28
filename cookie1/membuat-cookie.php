<?php
$nama_cookie = "pengguna";
$nilai_cookie = "Tutorial Web";
setcookie($nama_cookie, $nilai_cookie, time() + (86400 * 30), "/"); // 86400 	= 1 hari
?>
<html>
<body>
 
<?php
if(!isset($_COOKIE[$nama_cookie])) {
    echo "Nama Cookie'" . $nama_cookie . "' belum dibuat!";
} else {
    echo "Cookie '" . $nama_cookie . "' sudah dibuat!<br>";
}
?>
</body>
</html>
