<?php
$servidor = "localhost";
$usuario = "id22254067_moosmon";
$contraseña = "22358002Mo$";
$base_de_datos = "id22254067_monica";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
