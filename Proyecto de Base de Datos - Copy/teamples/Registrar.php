<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="oswald-body">
    <div class="mensaje-cont">
        <h1>!!Comencemos¡¡</h1>
    </div>
    <div class="form-body">
        <section class="form-cont">
            <form action="config/send.php" method="post" name="registro" autocapitalize="off">
                <?php if (isset($_GET['registro']) && $_GET['registro'] === 'exitoso'):?>
                        <p class="registro-exitoso">¡Registro exitoso!</p>
                <?php endif;?>
                <div class="input-cont">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                </div>
                
                <div class="input-cont">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Correo" required>
                </div>

                <div class="input-cont" >
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="tel" placeholder="Celular">
                </div>

                <div class="input-cont">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
                
                <input type="submit" name="submit" value="Registrarte" class="submit" >
                <?php if(isset($_GET['registro']) && $_GET['registro'] == 'exitoso'): ?>
                    <p class="submit"><a href="Login.php">Iniciar sesion</a>
                <?php endif ?>
            </form>
        </section>
    </div> 
</body>
</html>
