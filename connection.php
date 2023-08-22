<?php
$urrl = 'localhost';
$username = "root";
$password = "";
$dbname = "school";
$conn = mysqli_connect($urrl, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>