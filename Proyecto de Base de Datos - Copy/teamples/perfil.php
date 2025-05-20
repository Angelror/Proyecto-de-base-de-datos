<?php
require_once 'config/sesion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body class="oswald-body">
    <header class="header-cont">
       <div class="nav-cont">
            <div class="Logo">
                <img src="#" alt="Logo">
            </div>
            <nav class="barNav">
                <ul class="lista-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Merch</a></li>
                

                <div class="login-true">
                    <li><a href="perfil.php"><img src="#" alt="avatar"></a></li>
                    <li><a href="config/loginout.php">Cerrar Secion</a></li>
                </div>
               </ul>
            </nav>
       </div>
    </header>
    <section class="perfil">
        <div class="datos-cont">
            <div class="cont-img-perfil">
                <img src="#" alt="foto de perfil">
            </div>
            <div class="datos">
                <strong>Usuario:</strong>
                <span><?php echo htmlspecialchars($usuario['usuario']); ?></span>
                <strong>Correo:</strong>
                <span><?php echo htmlspecialchars($usuario['email']); ?></span>
                <strong> Celular:</strong>
                <span><?php echo htmlspecialchars($usuario['telefono']); ?></span>
            </div>
        </div>
    </section>
    <section class="actualizar-perfil">
        <div class="cont-actualizar">
            <p><a href="actualizar_datos.php">Actualizar perfil</a></p>
            <p><a href="Direccion.php">Agregar Direccion</a></p>
            <form action="config/eliminar_cuenta.php" method="post" onsubmit="return confirm('¿Estas seguro de eliminar la cuenta?, esta accion no se puede desacer');">
                <button type="submit">Eliminar cuanta</button>
            </form>
        </div>
    </section>
</body>
</html>