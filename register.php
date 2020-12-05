<?php
	// Include config file
	require_once "config.php";
	if(isset($_POST['submit']))
	{
		include "home.html";
		// extract($_POST);
		// if(empty(trim($username)))
		// {
		// 	echo "Please enter a username!";
		// } else {
		// 	echo $username . " " . $password . " " $confirmpassword;
		// }
	}
?>