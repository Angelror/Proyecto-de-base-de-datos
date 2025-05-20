<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Merch</title>
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
                <?php if(isset($_SESSION['usuario'])):?>
                    <div class="login-true">
                        <ul class="lista-login">
                            <li><a href="perfil.php"><img src="#" alt="avatar"></a></li>
                            <li><a href="config/loginout.php">Cerrar Secion</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="login-cont">
                        <ul class="lista-login">
                            <li><a href="Registrar.php">Registro</a></li>
                            <li><a href="Login.php">Iniciar secion</a></li>
                        </ul>
                    </div>
                <?php endif;?>
            </nav>
       </div>
    </header>

    <section class="seccion-stock">
        <div class="cont-stock">
            <div class="cont-merch">
                <div class="merch">
                    <img src="#" alt="camisa 1">
                    <strong>Prenda:</strong>
                    <strong>Talla:</strong>
                    <strong>Stock:</strong>
                </div>
                <div class="merch">
                    <img src="#" alt="camisa 2">
                    <strong>Prenda:</strong>
                    <strong>Talla:</strong>
                    <strong>Stock:</strong>
                    <strong>Precio:</strong>
                </div>
                <div class="merch">
                    <img src="#" alt="camisa 3">
                    <strong>Prenda:</strong>
                    <strong>Talla:</strong>
                    <strong>Stock:</strong>
                    <strong>Precio:</strong>
                </div>
                <div class="merch">
                    <img src="#" alt="camisa 4">
                    <strong>Prenda:</strong>
                    <strong>Talla:</strong>
                    <strong>Stock:</strong>
                    <strong>Precio:</strong>
                </div>
            </div>
            <div class="cont-carrito">
                <div class="Carrito">
                    <p>Carrito:</p>
                    <strong>Prenda:</strong>
                    <strong>Talla:</strong>
                    <strong>Total:</strong>
                </div>
            </div>
        </div>
    </section>
</body>
</html>