<?php
session_start();

//error_reporting(0); //desactivar notificaciones de errores
//$varsesion == $_SESSION['usuario'];

//if($varsesion == null || $varsesion = '') {
	//echo 'Usted no esta autorizado para Ingresar';
	//die()}

function exception_error_handler($errno,$errtr,$errfile,$errline)
{
	throw new ErrorException($errstr,0,$no,$errline);
	
}

set_error_handler("exception_error_handler");

try {

session_destroy();
header("Location:index.html");

 }catch (Exception $e)
  
{
	echo "Se ha producido una Excepcion". $e->getMessage()."<br/>\n";
 	
 } 

?>