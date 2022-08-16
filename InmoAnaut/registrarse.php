<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <?php include "includes/scripts.php" ?>
    <title>registrarse</title>


    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

</head>
<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>

<body>
    <center>
        <section id="container">
            <form action="crear_usuario.php" method="post">
                <h3>Formulario de Registro</h3>
                </br>
                </br>
                <img class="imagenRegistro" src="img/registrarse.png" alt="Login">
                </br>
                </br>
                <label for="nombre">Nombre <span><em>(Requerido)</em></span></label>
                <input type="text" name="nombre" id="nombre" class="form-input" required />
                </br>
                <label for="apellido">Apellidos <span><em>(Requerido)</em></span></label>
                <input type="text" name="apellido" id="apellido" class="form-input" required />
                </br>
                <label for="password">Contraseña <span><em>(Requerido)</em></span></label>
                <input type="password" name="password" id="password" class="form-input" required />
                </br>
                <label for="email">email <span><em>(Requerido)</em></span></label>
                <input type="text" name="email" id="email" class="form-input" required />
                <input class="form-btn" name="submit" type="submit" value="Registrate" onclick="crear_usuario.php" />
            </form>
        </section>
    </center>
    <?php include "includes/footer.php" ?>
</body>

</html>