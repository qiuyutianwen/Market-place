<?php
session_start();

require_once "config.php";
if(isset($_POST['save']))
{
  $gID = mysqli_real_escape_string($link, $_POST['id']);
	$username = mysqli_real_escape_string($link, $_POST['name']);
  $email = mysqli_real_escape_string($link, $_POST['email']);

  //Judge if this id has been in our database
  $sql = "SELECT id, gID, username, email, reg_date FROM GTable WHERE gID = '" . $gID . "';";
  $result = mysqli_query($link, $sql);
  if (mysqli_num_rows($result) > 0) {
  // output data of each row
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_POST['name'];
    echo "Exists";
   } else {
      $sql1 = "INSERT INTO GTable (gID, username, email)" . " VALUES ('" . $gID ."', '" . $username ."', '" . $email ."');";
      if (mysqli_query($link, $sql1) === TRUE) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $_POST['name'];
       	echo "Inserted";
     	} else {
     	  echo mysqli_error($link);
     	}
   }
}
mysqli_close($link);
?>
