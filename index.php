<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <form action="IniciarSesion.php" method="post">

        <h1>INICIAR SESIÓN</h1>

        <hr>
        <?php
        if (isset($_GET["error"])) { ?>
            <p class="error">
                <?php echo $_GET["error"]; ?>
            </p>
        <?php } ?>
        <hr>

        <div class="contenido">

            <div>
                <i class="fa-solid fa-user"></i>
                <label for="Usuario">Usuario</label> <br> <br>
                <input type="text" name="Usuario" placeholder="Nombre de usuario">
            </div>

            <br>
            <div>
                <i class="fa-solid fa-unlock"></i>
                <label for="Clave">Clave</label> <br><br>
                <input type="password" name="Clave" placeholder="Contraseña">
            </div>

        </div>

        <hr>

        <div style="display: flex; justify-content: center;">
            <button type="submit">Iniciar Sesión</button>
        </div>
        <br>
        <div style="display:flex; justify-content: center;">
            <a href="CrearCuenta.php">Crear Cuenta</a>
        </div>

    </form>



</body>

</html>