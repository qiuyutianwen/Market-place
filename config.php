<?php
$DB_SERVER = "us-cdbr-east-02.cleardb.com";
$DB_USERNAME = "bf38aba858b8c1";
$DB_PASSWORD = "2d895be4";
$DB_NAME = "heroku_ba414de4a9832ae";

// Create connection
$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>