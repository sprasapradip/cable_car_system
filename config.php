<?php

$host = "202.202.202.81";
$port = "3306"; // default MySQL port
$username = "root";
$password = "root";
$database = "cablecar_db";

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>