<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel Oliva Oficial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="oswald-body">
    <header class="header-cont">
       <div class="nav-cont">
            <div class="Logo">
                <img src="#" alt="Logo">
            </div>
            <nav class="barNav">
                <ul class="lista-nav">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="merch.php">Merch</a></li>
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
    <section class="informacion-cont">
        <div class="informacion">
            <h1>Informacion del proyecto</h1>
            <br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>Aperiam molestiae adipisci vel nam dolorum odio harum impedit 
                magnam nobis! </p>Laborum natus doloremque sequi necessitatibus 
                nostrum dignissimos iste cupiditate magni beatae.</p>
        </div>
        <div class="img-mi">
            <img src="../assets/mi.png" alt="Angel Oliva">
        </div>
    </section>
    <section class="tienda">
        <div class="tienda-cont">
            <img src="../assets/Logo_h.png" alt="Logo_h">
            <ul class="btn-tienda">
                <li><a href="#">Merch</a></li>
                <li><a href="#">Fechas</a></li>
            </ul>
        </div>
    </section>
    <section class="spotify">
        <div class="spotify-cont">
            <iframe style="border-radius:12px" 
                src="https://open.spotify.com/embed/artist/3Y3sWe9RsCgckfbOTEdDtP?si=teMTX7y4RPqdZ0UnTfpsEg" 
                width="70%" height="380" frameBorder="0" 
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                loading="lazy" class="spotify">
            </iframe>
        </div>
    </section>

    <section class="videos">
        <div class="videos-cont">
            <div class="videos2">
                <div class="video-1">
                    <iframe width="560" height="315" src="https://www.youtube.com/watch?v=ooPcQYrahA8" frameborder="0" allow= "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div>
    
                <div class="video-2">
                    <iframe width="560" height="315" src="https://www.youtube.com/watch?v=909sC9-w__M" frameborder="0" allow= "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div>
            </div>

            <div class="video-3">
                <iframe width="560" height="315" src="https://www.youtube.com/watch?v=Wi08JFdeDjQ" frameborder="0" allow= "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="Redes-cont">
            <h3>Redes</h3>
            <ul class="Redes">
                <li><a href="#"><i class="fab fa-spotify"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            </ul>
            <p class="creditos">&copy; Angel Oliva 2025</p>
        </div>
    </footer>
</body>
</html>