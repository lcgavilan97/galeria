<?php
// config.php - Database connection settings

$host = 'your-rds-endpoint.rds.amazonaws.com'; // Reemplaza con el endpoint de tu RDS
$dbname = 'galeria';
$username = 'your-username'; // Usuario de RDS
$password = 'your-password'; // Contraseña de RDS

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>