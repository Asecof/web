<html>
<head>
	<title>Bienvenido a Modificar Datos </title>
	<meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="css/registros.css">
</head>
<body background="imagenes/fondo.jpg" text="black">

	<header>
		<link rel="stylesheet" type="text/css" href="../css/menu2.css">

       <input type="checkbox" id="btn-menu">
       <label for="btn-menu"><img src="../imagenes/menu1.gif" width="70px" eigth="100px" alt=""></label>

       <nav class="menu">

             <ul>

				  <li><img src="../imagenes/logo1.png" width="50px" eigth="60px"></a></li>
                  <li><a href="tabla.php">Regresar<img src="../imagenes/regresar.png" width="30px" eigth="40px"></a></li>
                  <li></li>
                  <li></li>
                   <li><h3><?php echo $_SESSION['usuario'] ?></h3><a href="cerrar_session.php">Cerrar sesión<img src="imagenes/cerrar_sesion.png" width="30" eigth="40"></a></li>
                 


             </ul>
        </nav>

	</header>

	

	<center><h1>Bienvenido Administrador</h1></center>
		<center><h1>Modificar Datos Usuarios Registrados</h1></center>
	<br>
	<center><img src="../imagenes/logo1.png" width="90" eigth="110"></center>
	<center><h3>Ingresa los Nuevos Datos</h3></center>


	<br><br>


		<?php

						$id=$_REQUEST['id'];

						include("cn.php");

						$query="SELECT * FROM registro WHERE id='$id'";
						$resultado= $conexion->query($query);
						$row=$resultado->fetch_assoc();
		?>

		<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="post" class="form-registrar">

		<h2 class="form-titulo">MODIFICAR</h2>
		<div class="contenedor-inputs">
			<input type="text" name="nombre" placeholder="Nombre(s)" value"<?php echo $row['nombre']; ?>" class="input-48" required>
			<input type="text" name="apellidos" placeholder="Apellidos" value"<?php echo $row['apellidos']; ?>" class="input-48" required>
			<input type="email" name="correo" placeholder="Correo" value"<?php echo $row['correo']; ?>" class="input-48" required>
			<input type="text" name="telefono" placeholder="Teléfono" value"<?php echo $row['telefono']; ?>" class="input-48" required>
			<input type="text" name="usuario" placeholder="Usuario" value"<?php echo $row['usuario']; ?>" class="input-48" required>
			<input type="password" name="clave" placeholder="Contraseña" value"<?php echo $row['clave']; ?>" class="input-48" required>
			<input type="submit" value="Registrar" class="btn-enviar">
			


		</div>




	</form>



</body>
</html>