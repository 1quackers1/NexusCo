<?php
// Replace these values with the ones from your database
$username = "testdev";
$password = "testdev";

$entered_username = $_POST["username"];
$entered_password = $_POST["password"];

if ($entered_username === $username && $entered_password === $password) {
    header("Location: dashboard.html");
} else {
    echo "Invalid credentials. Please try again.";
}
?>
