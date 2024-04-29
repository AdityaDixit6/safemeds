<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Get username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if the username and password are valid
        if ($username === "admin" && $password === "admin123") {
            // Redirect to admin page
            header("Location: admin_page.html");
            exit();
        } elseif ($username === "cashier" && $password === "cashier123") {
            // Redirect to cashier page
            header("Location: cashier_page.html");
            exit();
        } else {
            // If credentials are invalid, display error message
            $error_message = "Invalid username or password. Please try again.";
        }
    } else {
        // If either username or password is not provided, display error message
        $error_message = "Please provide both username and password.";
    }
}
?>

