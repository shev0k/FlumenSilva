<?php
//datele de conectare la baza de date
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '1234');
define('DB_NAME', 'login');
 
//link la baza de date
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//verificarea conexiunii
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>