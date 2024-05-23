<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
	
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

	
	

	<center>
		<table  border="3">
			<thead>
				<h1>Bienvenido "Administrador"</h1>
				<h1>Lista de usuarios registrados</h1>
				<center><img src="../imagenes/logo1.png" width="100" eigth="120"></center>
				<br><br><br><br>
					
					<tr>
						<th colspan="1"><a href="paginas/index2.html">Nuevo</a></th>
						<th colspan="8" bgcolor="#BF00FF" text="white">LISTA DE USUARIOS REGISTRADOS</th>
					</tr>

			</thead>
				<tbody>
					<tr bgcolor="orange" align="center">
					
						<td>Id</td>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Correo</td>
						<td>Teléfono</td>
						<td>Usuario</td>
						<td>Contraseña</td>
						<td>Modificar</td>
						<td>Eliminar</td>
					
					</tr>
					

						<?php
						include("cn.php");

						$query="SELECT * FROM registro";
						$resultado= $conexion->query($query);
						while($row=$resultado->fetch_assoc()){
							?>

							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['apellidos']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['usuario']; ?></td>
								<td><?php echo $row['clave']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
								<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>


							</tr>

							<?php
						}


						?>


				</tbody>


		</table>


	</center>

	<br><br><br><br><br>

</body>
</html>	