<?php
$db_host = "localhost";
$db_user = "deustoforma";
$db_password = "deustoforma123";
$db_name = "inmobiliaria";
$db_table_name = "inmuebles";


$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);




if (!$db_connection)
    die('No se ha podido conectar a la base de datos');
if ($db_connection)
    echo "Se ha podido conectar";

$busq_precio_maximo = utf8_decode($_POST['precio_maximo']);
$busq_precio_minimo = utf8_decode($_POST['precio_minimo']);
$busq_habitaciones = utf8_decode($_POST['numero_habitaciones']);
$busq_fecha_construccion = utf8_decode($_POST['fecha_construccion']);
$busq_amueblado = utf8_decode($_POST['amueblado']);

/*$resultado = $db_connection->query("select * from " . $db_table_name . " WHERE correo = '" . $subs_email . "'");

if ($resultado and $resultado->num_rows > 0)
    header('Location: mismo_email.html');
else {
    echo ("Estamos dentro");
    $insert_value = 'INSERT INTO ' . $db_name . ' . ' . $db_table_name . ' (nombre, apellidos, correo) VALUES("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '");';
    $db = mysqli_select_db($db_connection, $db_name);
    $retry_value = mysqli_query($db_connection, $insert_value);
}
if (!$retry_value)
    die('Error: ');
else
    header('Location: Success.html');

mysqli_close($db_connection);
*/



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/scripts.php" ?>
    <title>pagina_busqueda</title>
    <!-- libreria ajax -->
    <script src="https://ajax.googleapis.com/ajax.com/ajx/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php include "includes/nav.php" ?>
    <section>

        <?php
        echo "Valores de la busqueda:</br>";
        echo $busq_precio_minimo . "</br>";
        echo $busq_precio_maximo . "</br>";
        echo $busq_habitaciones . "</br>";
        echo $busq_fecha_construccion . "</br>";
        echo $busq_amueblado . "</br>";

        if ($busq_precio_minimo = "-" and $busq_precio_maximo = "-") {
            $resultado_busqueda2 = $db_connection->query('SELECT * FROM `inmuebles` ORDER BY `idInmueble` ASC;');
            echo ('<pre>');
            var_dump($resultado_busqueda2);
            echo ('</pre>');
        } else {
            $resultado_busqueda = $db_connection->query('SELECT * FROM ' . $db_name . ' . ' . $db_table_name . ' WHERE precio >= ' . $busq_precio_maximo . ' ORDER BY precio ASC;');
            echo ('<pre>');
            var_dump($resultado_busqueda);
            echo ('</pre>');
            $resultado_busqueda2 = $db_connection->query('SELECT * FROM `inmuebles` WHERE `precio` BETWEEN ' . $busq_precio_minimo . ' AND ' . $busq_precio_maximo . ' ORDER BY `idInmueble` ASC');
            echo ('<pre>');
            var_dump($resultado_busqueda2);
            echo ('</pre>');
        }
        
        if(isset($busq_habitaciones))
        $resultado_busqueda = $db_connection->query('SELECT * FROM ' . $db_name . ' . ' . $db_table_name . ' WHERE habitaciones == ' . $busq_habitaciones . ' ORDER BY precio ASC;');
?>
    </section>

</body>

</html>