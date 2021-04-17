<?php
// Start the session
session_start();

// Set session variables
$_SESSION["favcolor"] = "green";

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";

// to show all the session variable values for a user session is to run the following code:
print_r($_SESSION);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// unset specific session
unset($_SESSION['']);
