<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <?php include "includes/scripts.php" ?>
    <title>Document</title>
</head>
<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>

<body>
    <section id="container">
        <form action="crear_usuario.php" method="post">
            <h3>Formulario de Registro</h3>
            </ </br>
            </br>
            <img src="img/candado.png" alt="Login">
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
            <input class="form-btn" name="submit" type="submit" value="Suscribirse" />
        </form>
    </section>
</body>

</html>