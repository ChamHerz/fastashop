<?php

$title = "Fasta Shop";

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php'; ?>
	</br>
	</br>
	</br>
	<?php

	// php select option value from database

	$hostname = "127.0.0.1";
	$username = "root";
	$password = "T3l3v1$0r";
	$databaseName = "olxdb";

	// connect to mysql database

	$connect = mysqli_connect(
		$hostname, $username, $password, $databaseName);

	if(mysqli_connect_error()) 
        echo "Error de Conexion"; 
    else
        echo "Conexion Exitosa". '<br>';

	// mysql select query
	$query = "SELECT * FROM rubro";

	// fconsulta
	$result = mysqli_query($connect, $query);

	while ($row = mysqli_fetch_array($result)) {         
		echo $row['DESC'] . '<br>';         
	} 

	// Cerrado
	mysqli_close($connect);

	?>
	</div>
	<script type="text/javascript" src="lib/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap.min.js"></script>
</body>
</html>