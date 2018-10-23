<?php

include 'core/conexion/cn.php';

date_default_timezone_set("America/Mexico_City");

$fecha = date ("Y-m-d H:i:s");
$id_publicacion = $_POST['id-publicacion'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$conexion = conectarbd();

$insertar="INSERT INTO consulta(FECHA, ID_PUBLICACION, NOMBRE, EMAIL, COMENTARIO) VALUES('$fecha', $id_publicacion, '$nombre', '$email', '$mensaje');";

if (mysqli_query($conexion, $insertar)) {
	$resultado = "exitoso";
} else {
	$resultado = "Error: " . $insertar . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

echo $resultado

?>
