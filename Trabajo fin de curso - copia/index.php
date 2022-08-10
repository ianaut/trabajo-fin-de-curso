    <?php session_start();
    if (!isset($_SESSION["cuantas_paginas"]))
        $_SESSION["cuantas_paginas"] = 1;
    else
        $_SESSION["cuantas_paginas"]++;

    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "includes/scripts.php" ?>
        <title>Index</title>
    </head>

    <body>
        <!--
        Formulario de recepcion para que el usuario pueda indicar sus preferencias (Precio, habitaciones, fecha de construccion,amueblados)
        Un panel de resultados
        Base de datos con al menos 30 viviendas con: precio, habitaciones, metros cuadrados, fecha de construccion, amuebladas, contacto (una misma persona puede poseer varias casas)
        Si quiero puedo poner diferentes ciudades tambien, o centrarme en una solo.
        Tambien puedo crear un login para guardar ofertas,
    -->

        <?php include "includes/header.php" ?>
        <?php include "includes/nav.php" ?>
        <footer>
            <?php
            echo "Desde que entraste has visto " . $_SESSION["cuantas_paginas"] . " paginas";

            ?>
        </footer>
    </body>

    </html>