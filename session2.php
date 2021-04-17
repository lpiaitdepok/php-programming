<?php
// Check if the session name exists 
if( isset($_SESSION['name']) ) { 
    echo 'Session name is set.'.'<br>'; 
} 
else { 
    echo 'Please set the session name !'.'<br>'; 
}
?>
