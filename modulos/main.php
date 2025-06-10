<?php
session_start();

if (!isset($_SESSION['nombre'])) {
    // Si no hay sesión, redirigir al login
    header('Location: ../index.php');
    exit();
}
?>
<!-- Contenido visible solo para usuarios autenticados -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>pagina Principal</h1>
    <button id="logout" type="submit">Cerrar sesión</button>

</body>
    <footer>
        <script src="../js/app.js"></script>
    </footer>
</html>