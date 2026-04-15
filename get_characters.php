<?php
// get_characters.php - API to fetch characters data as JSON

require 'config.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    http_response_code(403);
    echo json_encode(['error' => 'No autorizado']);
    exit;
}

$stmt = $pdo->query("SELECT nombre, descripcion, imagen FROM characters ORDER BY id");
$characters = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($characters);
?>