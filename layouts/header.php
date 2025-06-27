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
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="ticket-outline"></ion-icon></span>
                        <span class="title">Tickets</span>
                    </a>
                </li>
                <li id="logout">
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Cerrar Sesion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <main>