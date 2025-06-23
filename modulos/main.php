<?php
/*session_start();

if (!isset($_SESSION['nombre'])) {
    // Si no hay sesión, redirigir al login
    header('Location: ../index.php');
    exit();
}*/
?>
<!-- Contenido visible solo para usuarios autenticados -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/258c34b44b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span>Accusoft</h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="las la-igloo"></a>
                    <span>Dashboard</span>
                </li>
                <li>
                    <a href="" class="las la-user"></a>
                    <span>Dashboard</span>
                </li>
                <li>
                    <a href="" class="las la-clipboard-list"></a>
                    <span>Dashboard</span>
                </li>
                <li>
                    <a href="" class="las la-receipt"></a>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-conten">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
            <div class="search-wrpper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                <img src="../img/icon.png" width="30px" height="30px" alt="">
                <div>
                    <h4>Jose Arturo</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Custumers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Custumers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<footer>
    <script src="../js/app.js"></script>
</footer>

</html>