<?php
	// Include config file
	require_once "config.php";

	if(isset($_POST['submit']))
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