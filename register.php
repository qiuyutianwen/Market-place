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
			$sql = "SELECT username, password FROM users " . "WHERE username = '" . $username . "';";
			$result = $conn->query($sql);
			  if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			      echo "<tr> <td>" . $row["username"]. "</td> <td>" . $row["password"]."</td> </tr>";
			    }
			  } else {
			    echo "0 results";
			  }
		}
	}
?>