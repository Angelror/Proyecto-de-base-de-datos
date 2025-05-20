<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    header("Location: Login.php");
    exit;
}

$conexion = new mysqli("localhost", "root", "Angel231004#","tiendaropa");
if ($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}

$usuario = $_SESSION['id_usuario'];
$sql = "SELECT nombre_usuario, correo, telefono FROM usuario WHERE id_usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();
$stmt->close();
$conexion->close();

return $usuario;
?>