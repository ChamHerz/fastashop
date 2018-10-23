<?php
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
include("cn.php");
$con=conectarbd();

$query="SELECT * FROM usuario WHERE NICK='$usuario' and PASSWORD='$clave'";
/*$query="SELECT * FROM usuario WHERE NICK=$_session['usuario'] and PASSWORD=$_session['clave']";*/
$resultado=mysqli_query($con, $query);
$filas = mysqli_num_rows($resultado);

if ($filas > 0){
	$_SESSION['login']=$usuario;
	header("location:../../index.php");
	/*echo var_dump($_SESSION);*/
	/*echo session_id();*/
}else{
	echo '<script>
	alert("Usaurio o contraseña erroneos");
	window.history.go(-1);
	</script>';
}
	
mysqli_free_result($resultado);
mysqli_close($con);

?>