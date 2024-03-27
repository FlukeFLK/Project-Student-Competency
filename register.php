<?php
// Include server.php to establish database connection
include_once('server.php');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get registration form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// Check if passwords match
if ($password !== $confirmPassword) {
    echo "Error: Passwords do not match";
    exit();
}

// Hash the password before storing in the database (improves security)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

// Execute statement
if ($stmt->execute()) {
    // Redirect to home.php after successful registration
    header("Location: home.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
