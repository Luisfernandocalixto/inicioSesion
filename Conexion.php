<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';

$db = 'administrar';

$conexion = mysqli_connect($host, $user , $pass, $db);

if (!$conexion) {
    echo "Conexión fallida";


}


?>