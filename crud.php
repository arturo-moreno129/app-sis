<?php
include('config.php'); // Incluye la conexión a la base de datos

ini_set('display_errors', 0); // No mostrar errores al cliente
ini_set('log_errors', 1);     // Registrar los errores
error_reporting(E_ALL);



if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'login':
            if (isset($_POST['user']) && isset($_POST['contrasena'])) {
                $response = login($_POST['user'], $_POST['contrasena']);
            } else {
                $response = ["status" => "error", "message" => "Faltan datos"];
            }
            break;
        case 'logout':
            session_start();
            $_SESSION = []; // Vacía la sesión
            session_destroy();
            session_regenerate_id(true); // Opcional para mayor seguridad

            // Envía la respuesta al cliente
            echo json_encode([
                "status" => "success", // Cambia a success si es un cierre exitoso
                "message" => "Sesión cerrada correctamente"
            ]);
            exit();
            break;
        default:
            $response = ["status" => "error", "message" => "Ningún método encontrado"];
            break;
    }
    echo json_encode($response);
}

function login($user, $pass)
{
    global $pdo;

    // Inicia la sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :user LIMIT 1");
        $stmt->bindParam(':user', $user);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass, $usuario['contrasena'])) {
                // Guardar en sesión
                $_SESSION['id'] = $usuario['id_user'];
                $_SESSION['nombre'] = $usuario['usuario'];

                return ["status" => "success", "message" => "Inicio de sesión correcto"];
            } else {
                return ["status" => "error", "message" => "Contraseña incorrecta"];
            }
        } else {
            return ["status" => "error", "message" => "Usuario no encontrado"];
        }
    } catch (PDOException $e) {
        return ["status" => "error", "message" => "Error en base de datos: " . $e->getMessage()];
    }
}


function registrarUsuario($user, $pass)
{
    global $pdo;

    try {
        // Verificar si el usuario ya existe
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE usuario = :user LIMIT 1");
        $stmt->bindParam(':user', $user);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return ["status" => "error", "message" => "El usuario ya existe"];
        }

        // Hashear la contraseña
        $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

        // Insertar el nuevo usuario
        $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, contrasena) VALUES (:user, :pass)");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $passwordHash);
        $stmt->execute();

        return ["status" => "success", "message" => "Usuario registrado correctamente"];
    } catch (PDOException $e) {
        return ["status" => "error", "message" => "Error en base de datos: " . $e->getMessage()];
    }
}
