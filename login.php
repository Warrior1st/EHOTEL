<?php
include "cnx.php";
session_start();

// Hardcoded credentials for demo purposes
$valid_username = "joseph";
$valid_password = "123456";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are valid
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable to indicate user is logged in
        $_SESSION["loggedin"] = true;

        // Redirect user to dashboard page
        header("Location: index.php");
        exit;
    } else {
        // Display error message
        echo "Invalid username or password.";
    }
}
?>