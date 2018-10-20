<?php

$title = "PHP Version";

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
			phpinfo();
		?>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>