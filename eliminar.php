<?php

include ("cn.php");

	$id=$_REQUEST['id'];
	

		$query="DELETE FROM registro  WHERE id='$id'";
		$resultado= $conexion->query($query);
		

		if($resultado){
			header("location: tabla.php");
		}
		else{
			echo "Eliminación No exitosa!";
		}


		


		?>


		