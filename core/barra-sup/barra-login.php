<?php
include_once("core/conexion/cn.php");
$conRubros=conectarbd();

$consultaRubros="SELECT * FROM rubro";

$consultado=mysqli_query($conRubros, $consultaRubros);
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="index.php">FastaShop</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarsExample04" aria-controls="navbarsExample04"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExample04">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
				href="https://example.com" id="dropdown04" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">Acerca de</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item" href="#">Programacion C</a> <a
						class="dropdown-item" href="#">Php Version</a> <a
						class="dropdown-item" href="php-version.php">MySQL Version</a>
				</div></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
				href="https://example.com" id="dropdown05" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">Rubros</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<?php while ($rowRubro = mysqli_fetch_array($consultado)) { ?>
						<a class="dropdown-item" href="productos.php?rubro=<?php echo $rowRubro['ID_RUBRO']; ?>"><?php echo $rowRubro['DESCRIPCION']; ?></a>
					<?php } 
					mysqli_close($conRubros);
					?>
				</div></li>
			<li class="nav-item"><a class="nav-link" href="#"><?php echo $_SESSION['login']; ?></a>
			<li class="nav-item"><a class="nav-link" href="new-producto.php">Publicar</a>
			<li class="nav-item"><a class="nav-link" href="logout.php">Salir</a>
		</ul>
		<form class="form-inline my-2 my-md-0" method="GET" action="productos.php">
			<input class="form-control" type="text" placeholder="Buscar Producto" name="buscar">
		</form>
	</div>
</nav>
<div class="div-sup-barra"></div>