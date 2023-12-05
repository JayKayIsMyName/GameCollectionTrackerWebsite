<?php
session_start(); // Starts a new session or resumes an existing one

$_SESSION = array(); // Clears all session variables

// Checks if cookies are used for sessions
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params(); // Gets the parameters of the session cookie
    // Deletes the session cookie
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy(); // Destroys the session

// Redirects the user to the login page
header('Location: login.php');
exit(); // Terminates the script
?>
