<?php

$title = "Buscador";

if (isset($_GET['rubro'])) {
	$rubro = $_GET['rubro'];
	$query = "SELECT ID_PUBLICACION, TITULO_ARTICULO, DESC_ARTICULO, PRECIO, IMAGEN_PATH FROM publicacion WHERE ID_RUBRO = ".$rubro;
}
else {
	$query = "SELECT ID_PUBLICACION, TITULO_ARTICULO, DESC_ARTICULO, PRECIO, IMAGEN_PATH FROM publicacion";
}


include 'core/conexion/cn.php';

$conexion = conectarbd();

$result = mysqli_query($conexion, $query);

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php'; ?>
		<div style="margin-top: 100px;">
			<div class="card-deck">
				<?php while ($row = mysqli_fetch_array($result)) { ?>
				<div class="card card-styles">
	    			<img class="card-img-top imagen-style" src="<?php echo $row['IMAGEN_PATH']; ?>" alt="Card image cap">
	    			<div class="card-body">
	      				<h5 class="card-title"><?php echo $row['TITULO_ARTICULO']; ?></h5>
	      				<p class="card-text"><?php echo $row['DESC_ARTICULO']; ?></p>
	      				<a href="producto.php?id=<?php echo $row['ID_PUBLICACION']; ?>" class="btn btn-secondary boton-consultar">Consultar</a>
	    			</div>
	    			<div class="card-footer">
	      				<h4 class="text-muted">$ <?php echo $row['PRECIO']; ?></h4>
	    			</div>
	  			</div>
	  			<?php } ?>
			</div>
		</div>
		<?php
			// Cerrado
			mysqli_close($conexion);
		?>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>