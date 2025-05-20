<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = '127.0.0.1';
$admin = 'root';
$clave = 'Angel231004#';
$bd = 'test';

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$bd;",$admin,$clave);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $usuario = $_POST["usuario"] ?? '';
        $email = $_POST["email"] ?? '';
        $tel = $_POST["tel"] ?? '';
        $password = $_POST["password"] ?? '';

        $sql = "INSERT INTO prueba (usuario, email, telefono, contrasena) VALUES (:usuario, :email, :tel, :password)";

        $stmt = $conexion->prepare($sql);

        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':password', $password);

        if($stmt->execute())
        {
           header("Location: ../Registrar.php?registro=exitoso");
        }
        else
        {
            echo "Error al almacenar los datos en la base de datos";
        }
    }
}
catch(PDOException $e)
{
    die('conexion de error: ' . $e->getMessage());
}
?>