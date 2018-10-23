<?php

$title = "Login";

include_once("core/conexion/cn.php");
$conRubrosNewProduct=conectarbd();

$consultaRubrosNewProduct="SELECT * FROM rubro";

$consultadoRubroNewProduct=mysqli_query($conRubrosNewProduct, $consultaRubrosNewProduct);

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-center">
					<form class="was-validated form-new-producto" action="validar-producto.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						    <select name="rubro" class="custom-select" required>
						      <option value="">Seleccione un rubro</option>
						      <?php while ($rowRubro = mysqli_fetch_array($consultadoRubroNewProduct)) { ?>
						      	<option value="<?php echo $rowRubro['ID_RUBRO']; ?>"><?php echo $rowRubro['DESCRIPCION']; ?></option>
						      	<?php } 
									mysqli_close($conRubros);
								?>
						    </select>
							<div class="invalid-feedback">Es necesario que ingrese el rubro</div>
							<div class="valid-feedback">Rubro Correcto!</div>
						</div>
						<div class="avatar-upload">
					        <div class="avatar-edit">
					        	<span class="btn btn-primary btn-file">
					        		Seleccionar Imagen...
					            	<input name="image-file" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
					            </span>
					            <label for="imageUpload"></label>
					        </div>
					        <div class="avatar-preview">
					            <div class="imagePreview" style="background-image: url('images/sin-imagen.jpeg');">
					            </div>
					        </div>
					    </div>
					    <div class="form-row">				    	
					    	<label for="validationServerTitulo">Titulo</label>
					    	<input name="titulo" type="text" class="form-control" id="validationServerTitulo" placeholder="Titulo" required>
					    	<div class="invalid-feedback">Es necesario ingresar un Titulo</div>
					    	<div class="valid-feedback">Titulo Correcto!</div>				    	
					    </div>
					    <div class="form-row">
					    	<label for="validationServerDescripcion">Descripcion</label>
					    	<textarea name="descripcion" class="form-control" id="validationServerDescripcion" placeholder="Ingrese descripcion" aria-label="With textarea" required></textarea>
					    	<div class="invalid-feedback">Una descripcion del producto es necesaria</div>
					    	<div class="valid-feedback">Descripcion Correcta!</div>
					    </div>
					    <div class="form-row">
					    	<label for="validationServerPrecio">Precio</label>
					    	<input name="precio" type="text" class="form-control" id="validationServerPrecio" placeholder="Precio" required>
					    	<div class="invalid-feedback">Es necesario poner un precio</div>
					    	<div class="valid-feedback">Precio Correcto!</div>	
					    </div>
					    <button class="btn btn-lg btn-primary btn-block" type="submit">Publicar</button>  
					</form>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				</div>
			</div>
		</div>

	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>