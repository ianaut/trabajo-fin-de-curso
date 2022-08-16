<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/scripts.php" ?>
    <title>Index</title>
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php include "includes/nav.php" ?>
    <center class="center">
        <div>

            <img src="img/imagen index.jpg" alt="Inicio" id="imagen" class="imagenInicio">
        </div>
    </center>
    <center>
        <div>
            <form action="buscador.php" class="cartelInicio">
                <p>Utiliza nuestro buscador para encontrar los mejores pisos al mejor precio</p>
                <input class="botonInicio" name="submit" type="submit" value="Buscador" />
            </form>
        </div>
    </center>
    <center>
        <div>
            <form action="registrarse.php" class="cartelInicio">
                <p>Registrate para estar al tanto de todas las novedades</p>
                <input class="botonInicio" name="submit" type="submit" value="Registrate" />
            </form>
        </div>
    </center>

    <?php include "includes/footer.php" ?>
</body>

</html>