<?php
session_start();
 if(!isset($_SESSION['usuario'])){
    header("Location: ../index.php");
    exit;
 }

 $usuario = $_SESSION['usuario'];

 $conexion = new mysqli("localhost","root","Angel231004#","test");
 if($conexion->connect_error){
    die("Error de conexion:" . $conexion->connect_error);
 }

 $sql = "DELETE FROM prueba WHERE usuario=?";
 $stmt = $conexion->prepare($sql);
 $stmt->bind_param("s", $usuario);

 if($stmt->execute()){
    session_destroy();
    header("Location: ../index.php?mensaje=cuenta eliminada");
    exit;
 }
 else{
    echo "Error al eliminar la cuenta: " . $stmt->error;
 }
?>