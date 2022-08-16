
<?php
        $db_host = "localhost";
        $db_user = "deustoforma";
        $db_password = "deustoforma123";
        $db_name = "inmobiliaria";
        $db_table_name = "usuario";


        $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        if (!$db_connection)
            die('No se ha podido conectar a la base de datos');
        if ($db_connection)
            echo "Se ha podido conectar";

        $subs_name = utf8_decode($_POST['nombre']);
        $subs_last = utf8_decode($_POST['apellido']);
        $subs_email = utf8_decode($_POST['email']);
        $subs_password = utf8_decode($_POST['password']);

        $resultado = $db_connection->query("select * from " . $db_table_name . " WHERE email = '" . $subs_email . "'");

        if ($resultado and $resultado->num_rows > 0)
            header('Location: mismo_email.php');
        else {
            echo ("Estamos dentro");
            $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` (`nombre` , `apellidos` , `email`, `password`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '", "' . $subs_password . '")';
            $db = mysqli_select_db($db_connection, $db_name);
            $retry_value = mysqli_query($db_connection, $insert_value);
        }
        if (!$retry_value)
            die('Error: ');
        else
            header('Location: usuario_exito.php');

        mysqli_close($db_connection);
        ?>
<?php session_start();
if (!isset($_SESSION["cuantas_paginas"]))
    $_SESSION["cuantas_paginas"] = 1;
else
    $_SESSION["cuantas_paginas"]++;

?>