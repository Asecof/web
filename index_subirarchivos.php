<!DOCTYPE html>
<html lang="es">

<head>
	<title>Despacho Contable ASECOF@</title>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">

	<link rel="stylesheet" href="css/estilos.css">
   
   <!-- Código imagen de logo en pestaña de página web -->
        <link rel="icon" type="image/png" href="../imagenes/logo1.png">
    
</head>

<body>

	<header>
		<link rel="stylesheet" type="text/css" href="css/menu2.css">

       <input type="checkbox" id="btn-menu">
       <label for="btn-menu"><img src="imagenes/menu1.gif" width="70px" eigth="100px" alt=""></label>

       <nav class="menu">

             <ul>

				  <li><img src="../imagenes/logo1.png" width="50px" eigth="60px"></a></li>
                  <li><a href="principal.html">Regresar<img src="imagenes/regresar.png" width="40px" eigth="50px"></a></li>
                  <li></li>
                  <li></li>
                  <li><h3><?php echo $_SESSION['usuario'] ?></h3><a href="cerrar_session.php">Cerrar sesión<img src="../imagenes/cerrar_sesion.png" width="30" eigth="40"></a></li>
                 


             </ul>
        </nav>

	</header>

		
		<br>

	<center><h1>Subir/Eliminar Estatus de Declaraciones</h1></center>
	<br><br>

	<center><h2>SUBIR ARCHIVO</h2></center>

	<center><h5>Seleccione el archivo y presione "Subir Archivo"</h5></center>

	<center>

		<form action="subir_archivos.php" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo"> <br><br>
		<button>Subir Archivo</button>

	</form>
</center>


	<br><br><br>
<center>
<div id="subidos" align="center">
	<h2>ESTATUS FISCALES SUBIDOS</h2>
	<br>

	
	
	<?php

	$directorio = 'archivos';
	$contArchivos = 0;

	if ($dir = opendir($directorio)){
		while ( $archivo = readdir($dir)) {
			if ($archivo != '.' && $archivo != '..'){
				$contArchivos++;
			echo "Archivo: <strong>$archivo</strong><br />";
		}
			
		}
		echo "Total de archivos : <strong>$contArchivos</strong>";
	}


	?>

</div>
</center>



	<center>

	<br><br><br>
	<h2>ELIMINAR ARCHIVO</h2>
	<h5>Ingrese el Nombre del Archivo que desea Eliminar</h5>
	
	<form action="eliminar_archivos.php" method="post">
		<input type="text" name="archivo"> <br><br>
		<input type="submit" value="Eliminar archivo" onclick="return ConfirmDelete()">

		<br><br>

	</form>


	<script type="text/javascript">
function ConfirmDelete() 
{
	var respuesta = confirm("Estas seguro que deseas eliminar el archivo?");

	if(respuesta == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}


</script>


	


</center>

<br><br><br><br><br>




	</body>
</html>