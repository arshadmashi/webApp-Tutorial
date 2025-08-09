<?php
/**
 * Handles session initialization and redirects logged-in users to the welcome page.
 */

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// if the user is already logged in then redirect user to welcome page
if (isset($_SESSION["userid"])) {
    header("location: welcome.php");
    exit;
}
?>