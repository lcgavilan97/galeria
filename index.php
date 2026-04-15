<?php
// index.php - Entry point, redirect to login or gallery

session_start();
if (isset($_SESSION['loggedin'])) {
    header('Location: gallery.php');
} else {
    header('Location: login.php');
}
exit;
?>