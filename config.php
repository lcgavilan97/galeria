<?php
// config.php - Database connection settings

$host = 'database-1.cefum66ee2iv.us-east-1.rds.amazonaws.com'; // Reemplaza con el endpoint de tu RDS
$dbname = 'galeria';
$username = 'admin'; // Usuario de RDS
$password = 'admin123'; // Contraseña de RDS

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>