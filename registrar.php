<?php
include 'cn.php';

//RECIBIR LOS DATOS Y ALMACENARLOS EN VARIABLES
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

//Consulta para insertar
$insertar = "INSERT INTO registro(nombre, apellidos, correo, telefono, usuario, clave) VALUES ('$nombre', '$apellidos', '$correo', '$telefono', '$usuario', '$clave')";

//VERIFICAR USUARIO REPETIDO (validacion usuario)
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
		alert("El usuario ya esta registrado! Ingrese otro nombre de usuario");
		window.history.go(-1);
	</script>';
	exit;
	
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM registro WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0){
			echo '<script>
		alert("El correo ya esta registrado! Ingrese un correo valido");
		window.history.go(-1);
	</script>';
	exit;
	
}


function exception_error_handler($errno,$errtr,$errfile,$errline)
{
	throw new ErrorException($errstr,0,$no,$errline);
	
}

set_error_handler("exception_error_handler");

try {
 	



//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo 'Error al Registrarse';



}  else {


	 echo '<script>
		alert("Usuario registrado Exitosamente");
		window.history.go(-1);
		</script>';
	}


} catch (Exception $e) 
{
	echo "Se ha producido una Excepcion". $e->getMessage()."<br/>\n";
 	
 } 

//CERRAR LA CONEXION
	mysqli_close($conexion);



	?>


