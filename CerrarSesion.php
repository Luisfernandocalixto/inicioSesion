<?php 

session_start();  //Iniciar una nueva sesión o reanudar la existente
session_unset(); // Libera todas las variables de sesión
session_destroy(); //Destruye toda la información registrada de una sesión

header("Location : index.php");

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 class="text-center">Fin</h1>
    
</body>
</html>