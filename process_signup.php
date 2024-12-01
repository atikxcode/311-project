<?php
// Include the database configuration file
include './db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate form data
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // No need to escape as it will be hashed
    $phone_number = $conn->real_escape_string($_POST['phone_number']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the users table
    $sql = "INSERT INTO users (full_name, email, password, phone_number)
            VALUES ('$full_name', '$email', '$hashed_password', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
        // Success message and redirect
        echo "Sign-up successful!";
        header("Location: /index.php"); // Redirect to the home page or success page
        exit();
    } else {
        // Display error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
