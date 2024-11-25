<?php
// Database connection
$servername = "localhost";  // Server address for XAMPP is always 'localhost'
$username = "root";         // Default MySQL username in XAMPP
$password = "";             // Default MySQL password is empty
$dbname = "university_rankings"; // The database you created or want to use

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
