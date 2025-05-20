<?php
session_start();
 if(!isset($_SESSION['id_usuario'])){
    header("Location: ../index.php");
    exit;
 }

 $usuario = $_SESSION['id_usuario'];

 $conexion = new mysqli("localhost","root","Angel231004#","tiendaropa");
 if($conexion->connect_error){
    die("Error de conexion:" . $conexion->connect_error);
 }

 $sql = "DELETE FROM usuario WHERE id_usuario=?";
 $stmt = $conexion->prepare($sql);
 $stmt->bind_param("i", $usuario);

 if($stmt->execute()){
    session_destroy();
    header("Location: ../index.php?mensaje=cuenta eliminada");
    exit;
 }
 else{
    echo "Error al eliminar la cuenta: " . $stmt->error;
 }
?>