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
echo $username;
echo $company;
echo $product;
?>