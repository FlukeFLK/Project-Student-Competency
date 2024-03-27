<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include your custom CSS files -->
    <link rel="stylesheet" href="skill.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            <a class="navbar-brand" href="home.php">Student Questionnaire</a>
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
                    session_start();
                    if(isset($_SESSION['username'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="#">Welcome, ' . $_SESSION['username'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="card-title text-center mb-4">Welcome to Your Profile</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h2>Skill Graph</h2>
                        <div class="d-flex justify-content-center">
                            <canvas id="skillChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <?php
                        // Include server.php to establish database connection
                        include_once('server.php');

                        // Function to get description based on score range
                        function getDescription($score) {
                            if ($score >= 0 && $score <= 5) {
                                return "คุณมีทักษะนี้ต่ำ";
                            } elseif ($score >= 6 && $score <= 10) {
                                return "คุณมีทักษะนี้ปานกลาง";
                            } elseif ($score >= 11 && $score <= 15) {
                                return "คุณมีทักษะนี้ดีมาก";
                            } elseif ($score >= 16 && $score <= 20) {
                                return "คุณมีทักษะนี้ยอดเยี่ยม";
                            } else {
                                return "";
                            }
                        }

                        // Check if the user is logged in
                        if(isset($_SESSION['username'])) {
                            // Get user ID from session
                            $user_id = $_SESSION['id']; // Replace 'user_id' with your actual session variable

                            // Query the database to retrieve the student's competency scores
                            $query = "SELECT * FROM scores WHERE user_id = ?";
                            $stmt = $conn->prepare($query);
                            $stmt->bind_param("i", $user_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Check if any rows are returned
                            if($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                // Extract scores from the database result and scale to max 20
                                $knowledgeScore = min($row['knowledge_score'], 20);
                                $skillScore = min($row['skill_score'], 20);
                                $abilityScore = min($row['ability_score'], 20);
                                $behaviorScore = min($row['behavior_score'], 20);

                                // Close the database connection
                                $stmt->close();
                                $conn->close();

                                // Descriptions for each skill score range
                                $knowledgeDesc = getDescription($knowledgeScore);
                                $skillDesc = getDescription($skillScore);
                                $abilityDesc = getDescription($abilityScore);
                                $behaviorDesc = getDescription($behaviorScore);

                                // Use JavaScript to draw the chart based on the scores
                                echo "<script>";
                                echo "var ctx = document.getElementById('skillChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'polarArea',
                                        data: {
                                            labels: ['Knowledge', 'Skill', 'Ability', 'Behavior'],
                                            datasets: [{
                                                label: 'Skill Level',
                                                data: [$knowledgeScore, $skillScore, $abilityScore, $behaviorScore],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.5)',
                                                    'rgba(54, 162, 235, 0.5)',
                                                    'rgba(255, 206, 86, 0.5)',
                                                    'rgba(75, 192, 192, 0.5)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: false,
                                            scales: {
                                                r: {
                                                    min: 0,
                                                    max: 20,
                                                    ticks: {
                                                        stepSize: 2
                                                    }
                                                }
                                            },
                                            plugins: {
                                                title: {
                                                    display: true,
                                                    text: 'Skill Level Chart'
                                                }
                                            }
                                        }
                                    });";
                                echo "</script>";

                                // Display descriptions for each skill
                                echo "<div class='text-center mt-4'>";
                                echo "<p><strong>Knowledge Summary:</strong> $knowledgeDesc</p>";
                                echo "<p><strong>Skill Summary:</strong> $skillDesc</p>";
                                echo "<p><strong>Ability Summary:</strong> $abilityDesc</p>";
                                echo "<p><strong>Behavior Summary:</strong> $behaviorDesc</p>";
                                echo "</div>";
                            } else {
                                echo "<p class='text-center'>No scores found for this user.</p>";
                            }
                        } else {
                            // If the user is not logged in, display an error message
                            echo "<p class='text-center'>Error: You must be logged in to view this page.</p>";
                        }
                        ?>


                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Student Questionnaire. All rights reserved.</p>
        </div>
    </footer>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
