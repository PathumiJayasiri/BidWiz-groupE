<?php
$host = "localhost";
$username = "testuser";
$password = "testuser";
$database = "bidwiz";


$connection = mysqli_connect($host, $username, $password, $database);


if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
