<?php

require './fbconfig.php';
// Initialize the session
session_destroy();

// Unset all of the session variables
unset($_SESSION['access_token']);

// Redirect to login page
header("location: test2.php");

?>
