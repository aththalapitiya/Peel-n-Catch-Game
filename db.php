<?php
$servername = "localhost";
$username = "root"; // Change this if you have a different DB user
$password = ""; // Change this if you have a password
$database = "peel_n_catch"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
