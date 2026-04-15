<?php
// config.php - Database connection settings

$host = 'localhost';
$dbname = 'galeria';
$username = 'root'; // Default XAMPP MySQL user
$password = ''; // Default XAMPP MySQL password (empty)

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=tu_base", "usuario", "contraseña");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>