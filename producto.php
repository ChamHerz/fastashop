<?php

$title = "Producto";

session_start();

if (isset($_GET['id'])) {

	include 'core/conexion/cn.php';
	
	$conexion = conectarbd();

	$idProducto = $_GET['id'];

	$query = "SELECT p.ID_PUBLICACION, p.FECHA, u.NICK, p.TITULO_ARTICULO, p.DESC_ARTICULO, p.PRECIO, p.IMAGEN_PATH FROM publicacion p INNER JOIN usuario u ON p.ID_USUARIO = u.ID_USUARIO WHERE p.ID_PUBLICACION = $idProducto";

	$resultProducto = mysqli_query($conexion, $query);

	$row = mysqli_fetch_array($resultProducto);
	echo $row['TITULO_ARTICULO'];
}

$esOwner = false;

if (isset($_SESSION['login'])) {
	//Esta logeado, verifico que sea el dueño
	$usuarioProducto = $row['NICK'];
	$usuarioLogeado = $_SESSION['login'];
	if (strtolower($usuarioProducto) == strtolower($usuarioLogeado)) {
		$esOwner = true;
	}
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
							<textarea rows="5" name="Mensaje" id="InputMensaje" class="form-control input-lg" placeholder="Ingrese el mensaje" tabindex="3" autofocus required></textarea>
							<input type="button" value="Enviar Mensaje" class="btn btn-primary btn-block btn-lg boton-enviar-mensaje" tabindex="4">
						</form>
						<div id="resultado">
						</div>

						<?php
						if ($esOwner) {
							$idPublicacion = $row['ID_PUBLICACION'];
							echo "<a class='btn btn-danger btn-block btn-lg' href='delete-producto.php?id=$idPublicacion'>Borrar Producto</a>";
						}

						?>
					</div>
				</div>
			</div>
			<?php
				if ($esOwner) {
					$consultaComentarios = "SELECT NOMBRE, EMAIL, FECHA, COMENTARIO FROM consulta WHERE ID_PUBLICACION = $idProducto";
					$resComentarios = mysqli_query($conexion, $consultaComentarios);

					while ($rowComent = mysqli_fetch_array($resComentarios)) {
			?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<div class="card text-left">
					  <div class="card-body">
					  	<div class="campo-comentarios">
						    <div class="input-group mb-3">
	  							<div class="input-group-prepend">
	    							<span class="input-group-text"><b>Usuario</b></span>
	  							</div>
	  							<input type="text" class="form-control" placeholder="Username" aria-label="Username" value="<?php echo $rowComent['NOMBRE']; ?>" readonly>
							</div>
						</div>
						<div class="campo-comentarios">
							<div class="input-group mb-3">
	  							<div class="input-group-prepend">
	    							<span class="input-group-text"><b>Email</b></span>
	  							</div>
	  							<input type="text" class="form-control" placeholder="Email" aria-label="Email" value="<?php echo $rowComent['EMAIL']; ?>" readonly>
							</div>
						</div>
						<div class="campo-comentarios">
							<div class="input-group mb-3">
	  							<div class="input-group-prepend">
	    							<span class="input-group-text"><b>Fecha</b></span>
	  							</div>
	  							<input type="text" class="form-control" placeholder="Fecha" aria-label="Fecha" value="<?php echo $rowComent['FECHA']; ?>" readonly>
							</div>
						</div>
						<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text"><b>Comentario</b></span>
						  </div>
						  <textarea class="form-control" aria-label="With textarea" readonly><?php echo $rowComent['COMENTARIO']; ?></textarea>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<?php
					}
				}
				mysqli_close($conexion);
			?>
		</div>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>