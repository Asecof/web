<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario'] = 'usuario';

//conectar a la base de satos
$conexion=mysqli_connect("sql100.tonohost.com", "ottos_27152360", "27081983", "ottos_27152360_bd_usuarios");
$consulta="SELECT * FROM registro WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas=@mysqli_num_rows($resultado);

function exception_error_handler($errno,$errtr,$errfile,$errline)
{
	throw new ErrorException($errstr,0,$no,$errline);
	
}

set_error_handler("exception_error_handler");

try {

if ($filas>0) {
	header("location:principal.html");

}
else {
	
	echo '<script>
		alert("Error en la autentificación. ¡Ingrese usuario y contraseña correctos!");
		window.history.go(-1);
	</script>';
	exit;	
	
}


} catch (Exception $e) 
{
	echo "Se ha producido una Excepcion". $e->getMessage()."<br/>\n";
 	
 } 



@mysqli_free_result($resultado);
mysqli_close($conexion);


?>

