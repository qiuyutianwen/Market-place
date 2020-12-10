<?php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: /login.php");
    exit;
}
$username = $_SESSION["username"];
$company = $_GET["company"];
$product = $_GET["product"];
$type = $_GET["type"];
$_SESSION["company"] = $company;
$_SESSION["product"] = $product;
require_once "config.php";
if(isset($_POST['save']))
{
	$_POST['ratedIndex']++;
	$re = mysqli_real_escape_string($link, $_POST['review']);
	$ra = mysqli_real_escape_string($link, $_POST['ratedIndex']);
	$sql = "INSERT INTO rating (company, product, username, review, rating)" . " VALUES ('" . $_SESSION["company"] . "', '" . $_SESSION["product"] . "', '" . $_SESSION["username"] . "', '" . $re . "', '" . $ra. "');";

	echo "successfully post";
	if (mysqli_query($link, $sql) === TRUE) {
    	echo "True";
	} else {
	  echo mysqli_error($link);
	}
}
?>