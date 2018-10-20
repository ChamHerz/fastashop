<?php

include 'core/conexion/cn.php';

date_default_timezone_set("America/Mexico_City");

$fecha = date ("j/n/Y");
$id_publicacion = $_POST['id-publicacion'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$conexion = conectarbd();

//$insertar="INSERT INTO consulta(FECHA, ID_PUBLICACION, NOMBRE, EMAIL, COMENTARIO) VALUES('$fecha', '$id_publicacion', '$nombre', '$email', '$mensaje')";

//$result = mysqli_query($conexion, $query);

mysqli_close($conexion);

echo $fecha;
?>
