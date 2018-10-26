<?php 
include 'core/conexion/cn.php';
$nombre =$_POST["Nombre"];
$apellido =$_POST["Apellido"];
$sexo =$_POST["genero"];
$fechaNacimiento =$_POST["fecha_N"];
$email =$_POST["email"];
$telefono =$_POST["telefono"];
$usuario =$_POST["Nick"];
$contrasenia =$_POST["password"];

echo $nombre;

$conexion = conectarbd();

$verificar_usuario_Y_email=mysqli_query($conexion,"SELECT * FROM usuario WHERE NICK='$usuario' OR EMAIL='$email'");
if (mysqli_num_rows($verificar_usuario_Y_email) > 0){
	echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}else{

$insertar="INSERT INTO usuario(NOMBRE, APELLIDO, SEXO, FECHA_NACIMIENTO, EMAIL, TELEFONO, NICK, PASSWORD) VALUES('$nombre', '$apellido', '$sexo', '$fechaNacimiento', '$email', '$telefono', '$usuario', '$contrasenia')";

$resultado= mysqli_query($conexion,$insertar);

}

mysqli_close($conexion);

$title = "Nuevo Usuario Validado";

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php';
		if ($resultado) {
			echo '<div class="alert alert-success alert-dismissable" id="flash-msg"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h4><i class="icon fa fa-check"></i>Registrado con exito. Bienvenido!</h4></div>';
		}
		else {
			echo "<div class='alert alert-danger'>Error de registro.</div>";
		}
		?>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>