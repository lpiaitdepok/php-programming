<?php
// set kadaluarsa 1 jam yang lalu
setcookie("pengguna", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie pengguna telah dihapus.";
?>

</body>
</html>
