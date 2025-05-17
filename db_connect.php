<?php
$host = 'localhost';
$db = 'web_auth_project';  // use the same database you created before or create a new one
$user = 'root';  
$pass = '';     

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
?>
