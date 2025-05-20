<?php
session_start();

if (!isset($_SESSION['usuario']))
{
    header("Location: index.php");
    exit;
}

$conexion = new mysqli("localhost","root","Angel231004#","test");
if($conexion->connect_error)
{
    die("Error de conexion:" . $conexion->connect_error);
}

$usuario = $_SESSION['usuario'];
$nuevoUsuario = $_POST['usuario'];
$email = $_POST['correo'];
$tel = $_POST['celular'];
$password = $_POST['contrasena'];

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    die("Correo invalido");
}

if(!empty($password))
{
    $sql = "UPDATE prueba SET usuario=?, email=?, telefono=?, contrasena=? WHERE usuario=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssss",$nuevoUsuario,$email,$tel,$password,$usuario);
}
else{
    $sql = "UPDATE prueba SET usuario=?, email=?, telefono=? WHERE usuario=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssss",$nuevoUsuario,$email,$tel,$usuario);
}

if($stmt->execute()){
    $_SESSION['usuario'] = $nuevoUsuario;
    header("Location: ../perfil.php");
    exit;
}
else{
    echo "error al actualizar:" . $stmt->error;
}

$stmt->close();
$conexion->close();
?>