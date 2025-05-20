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
$stmt = $conexion->prepare("SELECT usuario, email, telefono, contrasena FROM prueba WHERE usuario=?");
$stmt->bind_param("s",$usuario);
$stmt->execute();
$stmt->bind_result($usuario, $email, $telefono, $password);
$stmt->fetch();
$stmt->close();
$conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Actualizar datos</title>
</head>
<body>
        <div class="mensaje">
            <h2>Vamos A Actualizar Tus Datos</h2>
        </div>
    <section class="cont-seccion">
        <div class="cont-actualizar">
            <br>
        <form action="config/actualizar_perfil.php" method="post">
            <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuario); ?>">
            <input type="email" name="correo" value="<?php echo htmlspecialchars($email); ?>">
            <input type="tel" name="celular" value="<?php echo htmlspecialchars($telefono); ?>">
            <input type="password" name="contrasena" value="<?php echo htmlspecialchars($password); ?>">

            <input type="submit" id="enviar" value="Guardar" >
        </form>
    </div>
    </section>
    
</body>
</html>