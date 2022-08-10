<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/scripts.php" ?>
    <title>mismo email</title>
</head>
<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>

<body>
    <form action="crear_usuario.php" method="POST">
        <h2><em>Suscripcion incompleta</em></h2>
        <p>La dirección de correo electronico introducido ya ha sido registrada anteriormente. Pruebe con otra. Gracias</p>

        <center><input class="form-btn" name="submit" type="button" value="Atras" </center>

    </form>
</body>

</html>