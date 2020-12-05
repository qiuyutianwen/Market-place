<?php
	// Include config file
	require_once "config.php";
	if(isset($_POST['submit']))
	{
		echo '<script>alert("Account created successfully!")</script>'; 
		// extract($_POST);
		// if(empty(trim($username)))
		// {
		// 	echo "Please enter a username!";
		// } else {
		// 	echo "<tr><td style=\"background-color:#F0E68C\">" . trim($username) .
  //   "</td><td style=\"background-color:#FFA500\">" . trim($password) .
  //   "</td><td style=\"background-color:#FFA500\">" . trim($confirmpassword) ."</td></tr>";
		// }
	}
?>