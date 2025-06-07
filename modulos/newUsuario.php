<?php
include '../config.php';
global $pdo;

try {
    // Supongamos que recibes los datos por POST (modifica según tu necesidad)
    $user = $_POST['user'] ?? 'JMoreno';
    $nombre = $_POST['nombre'] ?? 'Jose Arturo';
    $apellido_p = $_POST['apellido_p'] ?? 'Moreno';
    $apellido_m = $_POST['apellido_m'] ?? 'Aguilar';
    $correo = $_POST['correo'] ?? 'soporte1@acrivera.com.mx';
    $puesto = $_POST['puesto'] ?? 'Soporte';
    $pass = $_POST['pass'] ?? 'inicio0625';  // La contraseña en texto plano que luego hashearás
    $id_area = $_POST['id_area'] ?? 1;
    $id_rol = $_POST['id_rol'] ?? 1;
    $id_permiso = $_POST['id_permiso'] ?? 1;

    // Verificar si el usuario ya existe
    $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :user LIMIT 1");
    $stmt->bindParam(':user', $user);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo json_encode(["status" => "error", "message" => "El usuario ya existe"]);
        exit;
    }

    // Hashear la contraseña
    $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario, explicitando columnas
    $stmt = $pdo->prepare("INSERT INTO users (usuario, nombre, apellido_p, apellido_m, correo, puesto, contasena, id_area, id_rol, id_permiso) VALUES (:user, :nombre, :apellido_p, :apellido_m, :correo, :puesto, :pass, :id_area, :id_rol, :id_permiso)");

    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido_p', $apellido_p);
    $stmt->bindParam(':apellido_m', $apellido_m);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':puesto', $puesto);
    $stmt->bindParam(':pass', $passwordHash);
    $stmt->bindParam(':id_area', $id_area);
    $stmt->bindParam(':id_rol', $id_rol);
    $stmt->bindParam(':id_permiso', $id_permiso);

    $stmt->execute();

    echo json_encode(["status" => "success", "message" => "Usuario registrado correctamente"]);
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => "Error en base de datos: " . $e->getMessage()]);
}
