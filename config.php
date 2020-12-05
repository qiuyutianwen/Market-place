<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-east-02.cleardb.com');
define('DB_USERNAME', 'bf38aba858b8c1');
define('DB_PASSWORD', '2d895be4');
define('DB_NAME', 'heroku_ba414de4a9832ae');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>