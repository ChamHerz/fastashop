<?php
include 'core/conexion/cn.php';
$idPublicacion = $_GET['id'];

$conexionParaBorrar = conectarbd();

$consultaParaBorrar ="DELETE FROM publicacion WHERE ID_PUBLICACION = $idPublicacion";

$resultadoParaBorrar = mysqli_query($conexionParaBorrar,$consultaParaBorrar);

mysqli_close($conexionParaBorrar);

$title = "Borrado de Producto";

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php';
		if ($resultadoParaBorrar) {
			echo '<div class="alert alert-success alert-dismissable" id="flash-msg"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><h4><i class="icon fa fa-check"></i>Borrado de publicacion con exito!</h4></div>';
		}
		else {
			echo "<div class='alert alert-danger'>Error de borrado de publicacion</div>";
		}
		?>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>