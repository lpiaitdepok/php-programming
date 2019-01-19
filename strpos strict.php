//https://www.smashingmagazine.com/

<?php

' using strict comparison
' to avoid wrong result
if (strpos($authors, 'Chris') !== FALSE) {
    echo 'Chris is an author.';
} else {
    echo 'Chris is not an author.';
}

?>
