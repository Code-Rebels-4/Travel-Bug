<?php

$host = "localhost"; // database host
$username = "root"; // database username
$password = ""; // database password
$database = "travelbug"; // database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
