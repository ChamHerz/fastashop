<?php

$title = "Producto";

if (isset($_GET['id'])) {

	include 'core/conexion/cn.php';
	
	$conexion = conectarbd();

	$query = "SELECT p.ID_PUBLICACION, p.FECHA, u.NICK, p.TITULO_ARTICULO, p.DESC_ARTICULO, p.PRECIO, p.IMAGEN_PATH FROM publicacion p INNER JOIN usuario u ON p.ID_USUARIO = u.ID_USUARIO WHERE p.ID_PUBLICACION = ".$_GET['id'];

	$result = mysqli_query($conexion, $query);

	$row = mysqli_fetch_array($result);
}

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-center">
					<div class="card text-left">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $row['TITULO_ARTICULO']; ?></h5>
					    <div class="float-lg-right precio-style">$ <?php echo $row['PRECIO']; ?></div>
					    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['FECHA']; ?></h6>
					    <img class="card-img-top" src="<?php echo $row['IMAGEN_PATH']; ?>" alt="Card image cap">
					    <p class="card-text"><?php echo $row['DESC_ARTICULO']; ?></p>
					  </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
					<div class="card text-center">
						<h5 class="card-title"><?php echo $row['NICK']; ?></h5>

						<form role="form">
							<span id="id-publicacion" style="display: none;"><?php echo $row['ID_PUBLICACION']; ?></span>
							<input type="text" name="Nombre" id="InputNombre" class="form-control input-lg" placeholder="Nombre(opcional)" tabindex="1" autofocus>
							<input type="text" name="Email" id="InputEmail" class="form-control input-lg" placeholder="Email(opcional)" tabindex="2" autofocus>
							<textarea rows="5" name="Mensaje" id="InputMensaje" class="form-control input-lg" placeholder="Ingrese el mensaje" tabindex="3" autofocus></textarea>
							<input type="button" value="Enviar Mensaje" class="btn btn-primary btn-block btn-lg boton-enviar-mensaje" tabindex="4">
						</form>
						<div id="resultado">
						</div>
					</div>
				</div>
			</div>
			<?php
				mysqli_close($conexion);
			?>
		</div>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>