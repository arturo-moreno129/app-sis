<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>ACR</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<body>
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script>
    // Esperar 2 segundos antes de mostrar contenido (simula carga)
    setTimeout(() => {
      document.getElementById('loader').style.display = 'none';
      //document.getElementById('contenido').style.display = 'block';
      console.log("hola")
      window.location.assign("main");
    }, 2000);
  </script>
</body>

</html>