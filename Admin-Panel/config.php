<?php

$host = "localhost"; // Change this to your database host
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "travelbug"; // Change this to your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
