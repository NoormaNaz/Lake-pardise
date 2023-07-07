<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "CounterApi";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
