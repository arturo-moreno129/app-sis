<?php
session_start();

if (isset($_SESSION['nombre'])) {
  // Ya está logueado, redirigir al dashboard
  header('Location: modulos/loading.php');
  exit();
}
?>
<!-- Tu formulario de login aquí -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/258c34b44b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <!---para animaciones y uso de sweetalert-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!---------------------------------------->
  <title>SIS</title><!--SISTEMA INTEGRAL DE SOLICITUDES-->
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" class="sign-in-form">
          <h2 class="title">iniciar sesión</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="usuario" placeholder="Usuario" autocomplete="username" id="user">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Contraseña" autocomplete="current-password" id="pass">
          </div>
          <input type="submit" value="iniciar sesión" class="btn solid" id="signin" />
          <!--<p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>-->
        </form>
        <form action="#" class="sign-up-form">
          <h2 class="title">Regístrate ahora</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Apellido Paterno" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Apellido Materno" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" autocomplete="current-password">
          </div>
          <!--<div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" autocomplete="current-password">

          </div>-->
          <input type="submit" class="btn" value="Registrate" id="singup" />
          <!--<p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>-->
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>¿Eres nuevo en AC Rivera?</h3>
          <p>
            ¡Bienvenido a Camiones Rivera! Regístrate ahora y agiliza tus trámites con rapidez y eficiencia. 🚛
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Registrate
          </button>
        </div>
        <img src="img/inertconexion.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>¿Ya eres uno de nosostros?</h3>
          <p>
            Automóviles y Camiones Rivera agiliza tus trámites en cada departamento, brindándote un servicio rápido y
            eficiente
          </p>
          <button class="btn transparent" id="sign-in-btn">
            iniciar sesión
          </button>
        </div>
        <img src="img/inertconexion.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>

</html>