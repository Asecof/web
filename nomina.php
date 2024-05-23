<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
<meta charset="utf-8">
	<title>Nomina Resultado</title>
</head>

<body background="imagenes/fondo.jpg" width="100" eigth="100">
	
	<h3>Bienvenido Administrador<?php echo $_SESSION['usuario'] ?></h3> <a href="cerrar_session.php"><img src="../imagenes/cerrar_sesion.png" width="40" eigth="60"></a>
		<h9>Cerrar sesión</h9>
		<a href="principal.html"><img src="../imagenes/regresar.png" width="50px" eigth="60px"></a>
		<h9>Regresar</h9>
		<br>

	<center>

		<h1>¡Bienvenido!</h1>
		<h1>Cálculo de la Nómina</h1>
		<center><img src="../imagenes/logo1.png" width="90" eigth="120"></center>
		<br><br><br>

		<table border="2" width="90%" cellspacing="0px">
	<tr class="fila1" align="center">
		<td colspan="5" align="center">INFORMACION BÁSICA</td>
	</tr>

	<tr class="fila2" align="center">
			<td>Nómina</td>
			<td>Nombre(s)</td>
			<td>Apellido(s)</td>
			<td>Salario Básico</td>
			<td>Dias</td>
			
		</tr>

		<tr class="fila3" align="center">
			<td>
				<?php
				switch ($_POST["nominas"]) {
							case 'a':
						echo "0000000001";
						break;
							case 'b':
						echo "0000000002";
						break;
							case 'c':
						echo "0000000003";
						break;
							case 'd':
						echo "0000000004";
						break;
							case 'e':
						echo "0000000005";
						break;
							case 'f':
						echo "0000000006";
						break;
							case 'g':
						echo "0000000007";
						break;
							case 'h':
						echo "0000000008";
						break;
							case 'i':
						echo "0000000009";
						break;
							case 'j':
						echo "0000000010";
						break;
					
				}


				?>

	</td>
			<td>
				<?php
				switch ($_POST["nominas"]) {
							case 'a':
						echo "Miriam ";
						break;
							case 'b':
						echo "Miguel Angel ";
						break;
							case 'c':
						echo "Rogelio";
						break;
							case 'd':
						echo "Magali";
						break;
							case 'e':
						echo "Vania";
						break;
							case 'f':
						echo "Ernesto";
						break;
							case 'g':
						echo "Carlos";
						break;
							case 'h':
						echo "Ana Luisa";
						break;
							case 'i':
						echo "Roberto";
						break;
							case 'j':
						echo "Pedro";
						break;
					
				}


				?>


			</td>
			
			<td>
				<?php
				switch ($_POST["nominas"]) {
							case 'a':
						echo "Reyes Merlos ";
						break;
							case 'b':
						echo " Rivero Díaz";
						break;
							case 'c':
						echo "Reyes";
						break;
							case 'd':
						echo "Reyes Merlos";
						break;
							case 'e':
						echo "Bravo";
						break;
							case 'f':
						echo "Mercado Merlos";
						break;
							case 'g':
						echo "Pineda";
						break;
							case 'h':
						echo "Rojas";
						break;
							case 'i':
						echo "Sanchez Cruz";
						break;
							case 'j':
						echo "Martinez";
						break;
					
				}



				?>


			</td>
			
			<td>
				<?php
				switch ($_POST["nominas"]) {
							case 'a':
							$basico=50000;
						echo $basico;
						break;
							case 'b':
							$basico=30000;
						echo $basico;
						break;
							case 'c':
							$basico=30000;
						echo $basico;
						break;
							case 'd':
							$basico=25000;
						echo $basico;
						break;
							case 'e':
							$basico=20000;
						echo $basico;
						break;
							case 'f':
							$basico=28000;
						echo $basico;
						break;
							case 'g':
							$basico=15000;
						echo $basico;
						break;
							case 'h':
							$basico=18000;
						echo $basico;
						break;
							case 'i':
							$basico=22000;
						echo $basico;
						break;
							case 'j':
							$basico=27000;
						echo $basico;
						break;
					
				}


				?>

			</td>
			
			<td>
				<?php
				$diastrabajados=$_POST["dias"];
				echo "$diastrabajados";

				if($diastrabajados > 31) {
					echo '<script>
		alert("Solo puede ingresar hasta 31 días trabajados como maximo");
		window.history.go(-1);
	</script>';
	exit;
				}


				?>


			</td>
			
		</tr>

	
	</table>
	<br><br>

	<table border="1" width="90%" cellspacing="0px">
	<tr class="fila1" align="center">
		<td rowspan="2">Salario</td>
		<td rowspan="2">Salario x Hora</td>
		<td rowspan="2">Cantidad Horas Diurnas</td>
		<td rowspan="2">Cantidad Horas Nocturnas</td>
		<td rowspan="2">Cantidad Horas Dominicales</td>
		<td colspan="3">VALOR HORAS EXTRAS</td>
		<td rowspan="2">Bonificaciones</td>
		<td rowspan="2">Total Devengado</td>
	</tr>
	
	<tr class="fila2" align="center">
		<td>Diurnas</td>
		<td>Nocturnas</td>
		<td>Dominicales</td>



	</tr>

	<tr class="fila2" align="center">
		<td>
			<?php
			$salario=($basico/30)*$diastrabajados;
			echo $salario;

			?>

		</td>
		
		<td>
			<?php
			$salarioxhora=($basico/30)/8;
			echo $salarioxhora;


			?>


		</td>
		
		<td>
			<?php
			$cantidaddiurnas=$_POST["diurnas"];
			echo $cantidaddiurnas;


			?>


		</td>
		
		<td>
			<?php
			$cantidadnocturnas=$_POST["nocturnas"];
			echo $cantidadnocturnas;

			?>


		</td>
		
		<td><?php
			$cantidaddominicales=$_POST["dominicales"];
			echo $cantidaddominicales;

			if($cantidaddominicales > 48) {
					echo '<script>
		alert("Solo puede ingresar hasta 48 horas dominicales trabajadas como maximo");
		window.history.go(-1);
	</script>';
	exit;
	    }

			?>

		</td>
		
		<td>
			<?php
			$valordiurno=($salarioxhora*0.25)*$cantidaddiurnas;
			echo $valordiurno;


			?>


		</td>
		
		<td>
			<?php
			$valornocturno=($salarioxhora*0.75)*$cantidadnocturnas;
			echo $valornocturno;


			?>

		</td>
		
		<td>
			<?php
			$valordominical=($salarioxhora*1)*$cantidaddominicales;
			echo $valordominical;

			?>


		</td>
		
		<td>
			<?php
			$totalbonificacion=$_POST["bonificaciones"];
			echo $totalbonificacion;


			?>



		</td>
		
		<td>
			<?php
			$totaldevengado=$salario+$valordiurno+$valornocturno+$valordominical+$totalbonificacion;
			echo $totaldevengado;


			?>



		</td>


	</tr>

	</table>

	<br><br>

	<table border="1" width="40%" cellspacing="0px">
	<tr class="fila1" align="center">
		<td colspan="1">DEDUCCIONES</td>
		<td colspan="1">NETO A PERCIBIR</td>
		
	</tr>

	<tr class="fila2" align="center">
		<td>Descuentos</td>
		<td>Total</td>
		
		

	</tr>

	</tr>

	<tr class="fila3" align="center">
		<td>
			<?php
			$valorprestamo=$_POST["prestamo"];
			echo $valorprestamo;

			?>


		</td>
		
		<td>
			<?php
			$netoapercibir=$totaldevengado-$valorprestamo;
			echo $netoapercibir;

			?>
		

		</td>

	</tr>
</table>


	</center>


</body>
</html>