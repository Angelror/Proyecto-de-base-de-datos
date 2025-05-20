<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Iniciar Secion</title>
</head>
<body class="oswald-body">
    <div class="mensaje-cont" id="mg">
        <h1>!!Nos Volvemos Aver¡¡</h1>
    </div>
    <div class="form-body">
        <section class="form-cont">
            <form action="config/login.php" method="post">
               <div class="input-cont">
                   <i class="fas fa-user"></i>
                   <input type="text" name="usuario" placeholder="Usuario" required>
               </div>
   
               <div class="input-cont">
                   <i class="fas fa-key"></i>
                   <input type="password" name="password" placeholder="Contraseña" required>
               </div>
   
                <input type="submit" name="submit" value="Iniciar Secion"class="submit">
           </form>
       </section>
    </div>

</body>
</html>