<?php
include 'database.php'; // Include the database connection file

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    listGames(); // If the user is logged in, list the games
} else {
    header('Location: login.php'); // If the user is not logged in, redirect to the login page
    exit(); // Terminate the current script
}
?>
