<?php
// gallery.php - Main gallery page with carousel

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Personajes de Videojuegos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Galería de Personajes</h1>
        <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
    </header>
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-inner" id="carousel-inner">
                <!-- Characters will be loaded here via JS -->
            </div>
            <button class="carousel-btn prev" id="prev-btn">&lt;</button>
            <button class="carousel-btn next" id="next-btn">&gt;</button>
        </div>
        <div class="indicators" id="indicators"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>