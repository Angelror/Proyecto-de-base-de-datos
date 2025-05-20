<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../Login.php");
    exit;
}

$conexion = new mysqli("localhost", "root", "Angel231004#", "tiendaropa");
if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id_usuario = $_SESSION['id_usuario'];

$stmt = $conexion->prepare("INSERT INTO Direccion (id_usuario, calle, numero, colonia, ciudad, estado) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $id_usuario, $_POST['calle'], $_POST['numero'], $_POST['colonia'], $_POST['ciudad'], $_POST['estado']);

if ($stmt->execute()) {
    echo "Dirección guardada correctamente";
} else {
    echo "Error al guardar la dirección: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
