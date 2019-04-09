<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'user');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'mdc_techclub_db');

        $mysql_host = 'localhost';            
        $mysql_user = 'root';
        $mysql_pass = 'password';
        $sqldb = 'favorite_songs';
        $m = "does not exist";

 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $sqldb);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>