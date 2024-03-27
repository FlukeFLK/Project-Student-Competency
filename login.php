<?php
// Include server.php to establish database connection
include_once('server.php');

// Get login form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and bind statement
$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

// Check if user exists
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $dbUsername, $dbPassword);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $dbPassword)) {
        // Password is correct, log in the user
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $dbUsername;
        
        // Redirect to home.php after successful login
        header("Location: home.php");
        exit();
    } else {
        // Password is incorrect
        echo "Error: Invalid password";
    }
} else {
    // User does not exist
    echo "Error: User not found";
}

$stmt->close();
$conn->close();
?>
