<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Agregar Direccion</title>
</head>
<body>
    <section class="cont-seccion">
        <div class="cont-actualizar">
            <form action="config/añadir_direccion.php" method="post">
                <input type="text" name="calle" placeholder="Calle" required>
                <input type="text" name="numero" placeholder="Numero Exterior" required>
                <input type="text" name="colonia" placeholder="Colonia" required>
                <input type="text" name="ciudad" placeholder="Ciudad" required>
                <input type="text" name="estado" placeholder="Estado" required>

                <input type="submit" id="enviar" value="Enviar">
            </form>
        </div>
    </section>
</body>
</html>