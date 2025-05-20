<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$servidor = '127.0.0.1';
$admin = 'root';
$clave = 'Angel231004#';
$bd = 'test';

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$bd;", $admin, $clave);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $usuario = $_POST['usuario'] ?? '';
        $password = $_POST['password'] ?? '';

        $sql = "SELECT * FROM prueba WHERE usuario = :usuario";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if($user && $password === $user['contrasena'])
        {
            $_SESSION['usuario'] = $usuario;
            header("Location: ../index.php");
            exit;
        }
        else
        {
            echo "Usuario o Contraseña incorrecta";
        }
        
        
    }
}
catch(PDOException $e)
{
    die("Error de conexion: " . $e->getMessage());
}
?>