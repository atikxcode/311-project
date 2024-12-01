<?php
// Include the database configuration file
include './db.php';

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get user inputs
    $email = $conn->real_escape_string($_POST['email']);
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $password = $_POST['password'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND full_name = '$full_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, fetch data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user data in session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to index.php
            header("Location: /index.php");
            exit();
        } else {
            $_SESSION['message'] = "Invalid password. Please try again.";
        }
    } else {
        $_SESSION['message'] = "No user found with the provided email and full name.";
    }

    // Redirect back to login page with an error message
    header("Location: login.php");
    exit();
}
?>
