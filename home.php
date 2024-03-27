<?php
// Start session to access session variables
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: login.html");
    exit();
}

// Retrieve username from session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Competency Questionnaire - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #41826E;
            color: #fff;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .nav-link{
            color: #fff;
            font-weight: bold;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #41826E;">
        <div class="container">
            <a class="navbar-brand" href="#">Student Questionnaire</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="myprofile.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <?php
                    if(isset($_SESSION['username'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="#">Welcome, ' . $_SESSION['username'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Welcome, <?php echo $username; ?>!</h1>
        <div class="center">
            <a href="questionnaire.php" class="btn btn-primary btn-lg">Take Test Questionnaire</a>
        </div>
        <p class="lead mt-4">Homepage.</p>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Student Questionnaire. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
