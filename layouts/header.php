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
    <title>ACR</title>
    <link rel="stylesheet" href="../css/styleModulos.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="bus-outline"></ion-icon></span>
                        <span class="title">Camiones rivera</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dasboard</span>
                    </a>
                </li>
                <li>
                    <a href="../modulos/viaticos">
                        <span class="icon"><ion-icon name="airplane-outline"></ion-icon></span>
                        <span class="title">Viaticos</span>
                    </a>
                </li>
                <li>
                    <a href="../modulos/permisos">
                        <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                        <span class="title">Permisos</span>
                    </a>
                </li>
                <li id="logout" class="no-hover-effect">
                    <a href="../logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Cerrar Sesión</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <main>