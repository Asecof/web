<?php

include ("cn.php");

	$id=$_REQUEST['id'];
	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];

		$query="UPDATE registro SET nombre='$nombre', apellidos='$apellidos', correo='$correo', telefono='$telefono', usuario='$usuario', clave='$clave' WHERE id='$id'";
		$resultado= $conexion->query($query);

		if($resultado){
			header("location: tabla.php");
		}
		else{
			echo "Modificación No exitosa!";
		}


		?>