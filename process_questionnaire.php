<?php
// Include server.php to establish database connection
include_once('server.php');

// Start or resume the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    // Get user ID from session
    $user_id = $_SESSION['id']; // Replace 'user_id' with your actual session variable
    // Store the result of the expression in variables
$knowledgeScore = $_POST['knowledge1'] + $_POST['knowledge2'] + $_POST['knowledge3']+ $_POST['knowledge4']+ $_POST['knowledge5'];
$skillScore = $_POST['skill1'] + $_POST['skill2'] + $_POST['skill3'] + $_POST['skill4'] + $_POST['skill5'];
$abilityScore = $_POST['ability1'] + $_POST['ability2'] + $_POST['ability3'] + $_POST['ability4'] + $_POST['ability5'];
$behaviorScore = $_POST['behavior1'] + $_POST['behavior2'] + $_POST['behavior3'] + $_POST['behavior4'] + $_POST['behavior5'];

// Check if the user has already submitted scores
$check_query = "SELECT * FROM scores WHERE user_id = ?";
$check_stmt = $conn->prepare($check_query);
$check_stmt->bind_param("i", $user_id);
$check_stmt->execute();
$check_result = $check_stmt->get_result();

if ($check_result->num_rows > 0) {
    // If the user has existing scores, update them instead of inserting new ones
    $update_query = "UPDATE scores SET knowledge_score = ?, skill_score = ?, ability_score = ?, behavior_score = ? WHERE user_id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("iiiii", $knowledgeScore, $skillScore, $abilityScore, $behaviorScore, $user_id);
    $update_stmt->execute();

    // Check if update was successful
    if ($update_stmt->affected_rows > 0) {
        // Redirect to myprofile.php
        header("Location: myprofile.php");
        exit();
    } else {
        echo "Error: Unable to update scores";
    }

    $update_stmt->close();
} else {
    // If the user has not submitted scores before, insert them
    $insert_query = "INSERT INTO scores (user_id, knowledge_score, skill_score, ability_score, behavior_score) VALUES (?, ?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_query);
    $insert_stmt->bind_param("iiiii", $user_id, $knowledgeScore, $skillScore, $abilityScore, $behaviorScore);
    $insert_stmt->execute();

    // Check if insertion was successful
    if ($insert_stmt->affected_rows > 0) {
        // Redirect to myprofile.php
        header("Location: myprofile.php");
        exit();
    } else {
        echo "Error: Unable to store scores";
    }

    $insert_stmt->close();
}

$check_stmt->close();
$conn->close();


    // Check if the user has already submitted scores
    $check_query = "SELECT * FROM scores WHERE user_id = ?";
    $check_stmt = $conn->prepare($check_query);
    $check_stmt->bind_param("i", $user_id);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        // If the user has existing scores, update them instead of inserting new ones
        $knowledgeScore = $_POST['knowledge1'] + $_POST['knowledge2'] + $_POST['knowledge3']+ $_POST['knowledge4']+ $_POST['knowledge5'];
        $skillScore = $_POST['skill1'] + $_POST['skill2'] + $_POST['skill3'] + $_POST['skill4'] + $_POST['skill5'];
        $abilityScore = $_POST['ability1'] + $_POST['ability2'] + $_POST['ability3'] + $_POST['ability4'] + $_POST['ability5'];
        $behaviorScore = $_POST['behavior1'] + $_POST['behavior2'] + $_POST['behavior3'] + $_POST['behavior4'] + $_POST['behavior5'];

        $update_query = "UPDATE scores SET knowledge_score = ?, skill_score = ?, ability_score = ?, behavior_score = ? WHERE user_id = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("iiiii", $knowledgeScore, $skillScore, $abilityScore, $behaviorScore, $user_id);
        $update_stmt->execute();

        // Check if update was successful
        if ($update_stmt->affected_rows > 0) {
            // Redirect to myprofile.php
            header("Location: myprofile.php");
            exit();
        } else {
            echo "Error: Unable to update scores";
        }

        $update_stmt->close();
    } else {
        // If the user has not submitted scores before, insert them
        $insert_query = "INSERT INTO scores (user_id, knowledge_score, skill_score, ability_score, behavior_score) VALUES (?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("iiiii", $user_id, $_POST['knowledge1'] + $_POST['knowledge2'] + $_POST['knowledge3']+ $_POST['knowledge4']+ $_POST['knowledge5'], $_POST['skill1'] + $_POST['skill2'] + $_POST['skill3'] + $_POST['skill4'] + $_POST['skill5'], $_POST['ability1'] + $_POST['ability2'] + $_POST['ability3'] + $_POST['ability4'] + $_POST['ability5'], $_POST['behavior1'] + $_POST['behavior2'] + $_POST['behavior3'] + $_POST['behavior4'] + $_POST['behavior5']);
        $insert_stmt->execute();

        // Check if insertion was successful
        if ($insert_stmt->affected_rows > 0) {
            // Redirect to myprofile.php
            header("Location: myprofile.php");
            exit();
        } else {
            echo "Error: Unable to store scores";
        }

        $insert_stmt->close();
    }

    $check_stmt->close();
    $conn->close();
} else {
    // If the user is not logged in, redirect them to the login page or handle the situation accordingly
    header("Location: login.html");
    exit(); // Ensure no further code execution after redirection
}
?>
