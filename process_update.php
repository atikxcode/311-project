<?php
// Include database connection
include './db.php';

// Start session to check for admin
session_start();

// Simulate retrieving user email (replace with actual session/email retrieval logic)
if (!isset($_SESSION['email'])) {
    echo "Error: You must be logged in to perform this action.";
    exit;
}

// Admin email
$adminEmail = "astaroth2077@gmail.com";
$email = $_SESSION['email'];

// Verify if the user is admin
if ($email !== $adminEmail) {
    echo "Error: You are not authorized to perform this action.";
    exit;
}

// Retrieve POST data
$rank = $_POST['rank'];
$university_name = $_POST['university_name'];
$country = $_POST['country'];
$subject_area = $_POST['subject_area'];
$year = $_POST['year'];
$qs_ranking = $_POST['qs_ranking'];

try {
    // Check if the rank already exists in the database
    $checkQuery = $conn->prepare("SELECT * FROM ranking WHERE rank = ?");
    $checkQuery->bind_param("i", $rank);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        // Update existing record
        $updateQuery = $conn->prepare("UPDATE ranking SET university_name = ?, country = ?, subject_area = ?, year = ?, qs_ranking = ? WHERE rank = ?");
        $updateQuery->bind_param("sssiii", $university_name, $country, $subject_area, $year, $qs_ranking, $rank);
        $updateQuery->execute();
        echo "University ranking updated successfully.";
    } else {
        // Insert new record
        $insertQuery = $conn->prepare("INSERT INTO ranking (rank, university_name, country, subject_area, year, qs_ranking) VALUES (?, ?, ?, ?, ?, ?)");
        $insertQuery->bind_param("isssii", $rank, $university_name, $country, $subject_area, $year, $qs_ranking);
        $insertQuery->execute();
        echo "New university ranking added successfully.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn->close();
?>
