<?php

$title = "Version de php";

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php'; ?>
		<div style="margin-top: 100px;">
			<?php
			phpinfo();
			?>
		</div>
	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>