<?php
	// Include config file
	require_once "config.php";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		extract($_POST);
		if(empty(trim($username)))
		{
			echo "Please enter a username!";
		} else {
			include 'home.html';
		}
	}
?>