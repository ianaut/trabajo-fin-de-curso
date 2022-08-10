<?php

$db_host = "localhost";
$db_user = "deustoforma";
$db_password = "deustoforma123";
$db_name = "inmobiliaria";
$db_table_name = "inmuebles";


$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
?>
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
    <title>resultado_busqueda</title>
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php include "includes/nav.php" ?>
    <h1>Resultado de busqueda</h1>
    <a href="buscador.php" class="btn-new">Nueva busqueda</a>
    <section id="container">
        <div>
            <h5>Resultados </h5>

                <table>
                    <tr>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Habitaciones</th>
                        <th>Metros</th>
                        <th>Amueblado</th>
                        <th>Tipo</th>

                    </tr>
                    <?php

                   


                    //tabla de contenidos
                    $busqueda = 'SELECT direccion, precio, habitaciones, metros, amueblado, tipo FROM ' . $db_table_name . ' ORDER BY idInmueble DESC';
                    $query = mysqli_query($db_connection, $busqueda);
                    $result = mysqli_num_rows($query);

                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>

                            <tr>
                                <td><?php echo $data["direccion"] ?></td>
                                <td><?php echo $data["precio"] ?></td>
                                <td><?php echo $data["habitaciones"] ?></td>
                                <td><?php echo $data["metros"] ?></td>
                                <td><?php echo $data["amueblado"] ?></td>
                                <td><?php echo $data["tipo"] ?></td>
                            </tr>
                    <?php
                        }
                    }

                    ?>
                </table>
            
        </div>
    </section>
</body>
<footer>
    <?php
    echo "Desde que entraste has visto " . $_SESSION["cuantas_paginas"] . " paginas";

    ?>
</footer>



</html>