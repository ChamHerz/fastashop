<?php

$title = "Login";

include 'core/head/head.php'; 
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'core/barra-sup/barra-sup.php'; ?>
		
<div class="container text-center">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form action="Validar.php" method="post" class="form-signin">
                <input type="text" name="usuario" id="InputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="clave" id="InputContrasenia" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" >
                    Sign in</button>             
                </form>
            </div>
            <a href="Login.php" class="text-center new-account">Nuevo Usuario </a>
        </div>
    </div>
</div>

	</div>
	<?php include 'core/footer/footer.php'; ?>
</body>
</html>