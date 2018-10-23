<?php

session_start();
$userNick = $_SESSION['login'];

include 'core/conexion/cn.php';
$conexionNewProducto = conectarbd();
$consultaIdUsuario = "SELECT ID_USUARIO FROM usuario WHERE NICK = '$userNick'";
$resultIdUsuario = mysqli_query($conexionNewProducto, $consultaIdUsuario);
$rowIdUsuario = mysqli_fetch_array($resultIdUsuario);
$idUsuario = $rowIdUsuario["ID_USUARIO"];

date_default_timezone_set("America/Mexico_City");

$fecha = date ("Y-m-d H:i:s");
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$rubro = $_POST['rubro'];

$info = pathinfo($_FILES['image-file']['name']);
$ext = $info['extension']; // get the extension of the file
$nameFile = $info['filename'];
$newname = $nameFile.".".$ext; 

$target = 'images/'.$newname;

move_uploaded_file( $_FILES['image-file']['tmp_name'], $target);

$insertarNewProducto="INSERT INTO publicacion(FECHA, ID_USUARIO, TITULO_ARTICULO, DESC_ARTICULO, PRECIO, IMAGEN_PATH, ID_RUBRO, ID_ESTADO) VALUES('$fecha', $idUsuario, '$titulo', '$descripcion', '$precio','$target','$rubro',1);";

if (mysqli_query($conexionNewProducto, $insertarNewProducto)) {
 	$resultadoCorrecto = true;
} else {
 	//$resultado = "Error: " . $insertarNewProducto . "<br>" . mysqli_error($conexionNewProducto);
 	$resultadoCorrecto = false;
}

mysqli_close($conexionNewProducto);

$title = "Nuevo Producto Validacion";

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php';
		if ($resultadoCorrecto) {
			echo '<div class="alert alert-success alert-dismissable" id="flash-msg"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h4><i class="icon fa fa-check"></i>Tu publicacion fue subida con exito!</h4></div>';
		}
		else {
			echo "<div class='alert alert-danger'>Sorry there was an error sending your message. Please try again later</div>";
		}
		?>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>