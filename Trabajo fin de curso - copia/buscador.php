<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/scripts.php" ?>
    <title>buscador</title>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    
    <!--
        Formulario de recepcion para que el usuario pueda indicar sus preferencias (Precio, habitaciones, fecha de construccion,amueblados)
        Un panel de resultados
        Base de datos con al menos 30 viviendas con: precio, habitaciones, metros cuadrados, fecha de construccion, amuebladas, contacto (una misma persona puede poseer varias casas)
        Si quiero puedo poner diferentes ciudades tambien, o centrarme en una solo.
        Tambien puedo crear un login para guardar ofertas,
    -->
    <?php include "includes/header.php" ?>
    <?php include "includes/nav.php" ?>

    <!--  Conexion a BD -->
    <?php
    $db_host = "localhost";
    $db_user = "deustoforma";
    $db_password = "deustoforma123";
    $db_name = "inmobiliaria";
    $db_table_name = "inmuebles";
    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if ($db_connection->connect_error) {
        die("la conexion ha fallado: " . $db_connection->connect_error);
    }
    if (!isset($_POST['direccion'])) {
        $_POST['direccion'] = '';
    }
    if (!isset($_POST['precio_minimo'])) {
        $_POST['precio_minimo'] = '';
    }
    if (!isset($_POST['precio_maximo'])) {
        $_POST['precio_maximo'] = '';
    }
    if (!isset($_POST['numero_habitaciones'])) {
        $_POST['numero_habitaciones'] = '';
    }
    if (!isset($_POST['fecha_construccion'])) {
        $_POST['fecha_construccion'] = '';
    }
    if (!isset($_POST['amueblado'])) {
        $_POST['amueblado'] = '';
    }
    if (!isset($_POST['orden'])) {
        $_POST['orden'] = '';
    }
    ?>

    <section>
        <table class="buscadorVivienda">
            <form name="buscador" method="POST" action="buscador.php">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $_POST["direccion"] ?>">
                <p>Precio mínimo</p>
                <select name="precio_minimo" id="precio_minimo">
                    <?php if ($_POST["precio_minimo"] != '') { ?>
                        <option value="<?php echo $_POST["precio_minimo"]; ?>"><?php echo $_POST["precio_minimo"] ?></option>
                    <?php } ?>
                    <option value=""></option>
                    <option value="50000">50000</option>
                    <option value="100000">100000</option>
                    <option value="150000">150000</option>
                    <option value="200000">200000</option>
                    <option value="250000">250000</option>
                    <option value="300000">300000</option>
                    <option value="350000">350000</option>
                    <option value="400000">400000</option>
                    <option value="450000">450000</option>
                    <option value="500000">500000</option>
                </select>

                <p>Precio máximo</p>

                <select name="precio_maximo" id="precio_maximo">
                    <?php if ($_POST["precio_maximo"] != '') { ?>
                        <option value="<?php echo $_POST["precio_maximo"]; ?>"><?php echo $_POST["precio_maximo"] ?></option>
                    <?php } ?>
                    <option value=""></option>
                    <option value="50000">50000</option>
                    <option value="100000">100000</option>
                    <option value="150000">150000</option>
                    <option value="200000">200000</option>
                    <option value="250000">250000</option>
                    <option value="300000">300000</option>
                    <option value="350000">350000</option>
                    <option value="400000">400000</option>
                    <option value="450000">450000</option>
                    <option value="500000">500000</option>
                </select>

                <div>
                    <p>Numero habitaciones</p>
                    <select name="numero_habitaciones" id="numero_habitaciones">
                        <?php if ($_POST["numero_habitaciones"] != '') { ?>
                            <option value="<?php echo $_POST["numero_habitaciones"]; ?>"><?php echo $_POST["numero_habitaciones"] ?></option>
                        <?php } ?>
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div>
                    <p>Fecha construccion</p>
                    <input type="date" name="fecha_construccion" id="fecha_contruccion" step="1" max="<?php echo date("Y-m-d"); ?>" min="1930-01-01" value="<?php echo $_POST["fecha_construccion"]; ?>" />
                </div>
                <div>
                    <p>Amueblado</p>
                    <select name="amueblado" id="amueblado">
                        <?php if ($_POST["amueblado"] != '') { ?>
                            <option value="<?php echo $_POST["amueblado"]; ?>"><?php echo $_POST["amueblado"] ?></option>
                        <?php } ?>
                        <option value=""></option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                </div>
                <div>
                    <input type="submit" value="Buscar" class="btn_search" />
                </div>

                <!-- filtro de busqueda -->
<?php
                if($_POST['direccion']=='')
                {$_POST['direccion']=' ';}
                $aKeyword=explode(" ", $_POST['direccion']);

                if($_POST["direccion"] == '' AND  $_POST["precio_minimo"]=='' AND $_POST["precio_maximo"]=='' AND $_POST["numero_habitaciones"]=='' AND $_POST["fecha_construccion"]=='' AND $_POST["amueblado"]==''){
                    $query="SELECT * FROM inmobiliaria";
                }
                else{
                    $query="SELECT * FROM inmobiliaria";
                if($_POST["direccion"]!='')
                    $query.="WHERE direccion LIKE LOWER('%".$aKeyword[0]."%'";
                    for($i=1; $i<count($aKeyword);$i++)
                    if(!empty($aKeyword[$i])){
                        $query .="OR direccion LIKE '%".$aKeyword."%' LIKE '%".$aKeyword[$i]."%'";
                    }
                if($_POST['precio_minimo'] != ''){
                    $query .=" AND precio>= '".$_POST['precio_minimo']."' ";
                }
                if ($_POST['precio_maximo'] != '') {
                    $query .= " AND precio<= '" . $_POST['precio_maximo'] . "' ";
                }
                if ($_POST['numero_habitaciones'] != '') {
                    $query .= " AND habitaciones = '" . $_POST['numero_habitaciones'] . "' ";
                }
                if ($_POST['fecha_construccion'] != '') {
                    $query .= " AND fecha = '" . $_POST['fecha_construccion'] . "' ";
                }
                if ($_POST['amueblado'] != '') {
                    $query .= " AND amueblado = '" . $_POST['amueblado'] . "' ";
                }
                
                //orden

                if ($_POST["orden"]== '1'){
                    $query .= " ORDER BY precio ASC";
                }
                if ($_POST["orden"] == '2') {
                    $query .= " ORDER BY precio DESC";
                }
                if ($_POST["orden"] == '3') {
                    $query .= " ORDER BY habitaciones ASC";
                }
                if ($_POST["orden"] == '4') {
                    $query .= " ORDER BY fecha ASC";
                }
                if ($_POST["orden"] == '5') {
                    $query .= " ORDER BY amueblado ASC";
                }
                }
                $sql=mysqli_query($db_connection,$query);
                $numeroSql = mysqli_num_rows($sql)
                
?>
<p> <?php echo $numeroSql?> Resultados encontrados</p>
                <!-- Para ordenar el buscador -->

                <h4>Ordenar por</h4>

                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th>
                                Selecciona el orden
                                <select id="assigned-tutro-filter" id="orden" name="orden" class="form_control mt-2">
                                    <?php if ($_POST["orden"] != '') { ?>
                                        <option value="<?php echo $_POST["orden"]; ?>">
                                            <?php
                                            if ($_POST["orden"] == '1') {
                                                echo "Ordenar por precio de menor a mayor";
                                            }
                                            if ($_POST["orden"] == '2') {
                                                echo "Ordenar por precio de mayor a menor";
                                            }
                                            if ($_POST["orden"] == '3') {
                                                echo "Ordenar por numero de habitaciones";
                                            }
                                            if ($_POST["orden"] == '4') {
                                                echo "Ordenar por fecha_construccion de construccion";
                                            }
                                            if ($_POST["orden"] == '5') {
                                                echo "Ordenar por amueblado o no";
                                            }
                                            ?></option>
                                    <?php } ?>
                                    <option value=""></option>
                                    <option value="1">Ordenar por precio de menor a mayor</option>
                                    <option value="2">Ordenar por precio de mayor a menor</option>
                                    <option value="3">Ordenar por numero de habitaciones</option>
                                    <option value="4">Ordenar por fecha de construccion</option>
                                    <option value="5">Ordenar por amueblado o no</option>
                                </select>
                            </th>
                        </tr>
                    </thead>
                </table>
            </form>


        </table>
        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Habitaciones</th>
                        <th>Metros</th>
                        <th>Amueblado</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rowSQL=$sql->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $rowSQL["direccion"] ?></td>
                        <td><?php echo $rowSQL["precio"] ?></td>
                        <td><?php echo $rowSQL["habitaciones"] ?></td>
                        <td><?php echo $rowSQL["metros"] ?></td>
                        <td><?php echo $rowSQL["amueblado"] ?></td>
                        <td><?php echo $rowSQL["tipo"] ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

        </div>


    </section>
</body>

</html>