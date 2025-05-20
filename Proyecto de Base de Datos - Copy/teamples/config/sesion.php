<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: Login.php");
}

$conexion = new mysqli("localhost", "root", "Angel231004#","test");
if ($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}

$usuario = $_SESSION['usuario'];
$sql = "SELECT usuario, email, telefono FROM prueba WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();
$stmt->close();
$conexion->close();

return $usuario;
?>