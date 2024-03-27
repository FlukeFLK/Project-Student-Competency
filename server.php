<?php
$host = 'localhost';
$username = 'root'; // Your actual database username
$password = ''; // Your actual database password
$dbName = 'sc_db'; // Your database name

// Create a new database connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
