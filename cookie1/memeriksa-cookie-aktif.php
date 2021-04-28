<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies telah aktif.";
} else {
    echo "Cookies tidak aktif.";
}
?>

</body>
</html>
