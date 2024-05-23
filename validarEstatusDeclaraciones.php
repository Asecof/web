<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de satos
$conexion=mysqli_connect("sql100.tonohost.com", "ottos_27152360", "27081983", "ottos_27152360_bd_usuarios");
$consulta="SELECT * FROM registro WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas=@mysqli_num_rows($resultado);



if ($consulta>0) {
	


}elseif ($usuario == servleo && $clave == servleo) {
	header("location:paginas_clientes/servicio_leo.html");

}elseif ($usuario == transpt && $clave == transpt) {
	header("location:paginas_clientes/transportacion_terrestre.html");

}elseif ($usuario == ragnarok && $clave == ragnarok) {
	header("location:paginas_clientes/ragnarok.html");

}elseif ($usuario == aloga && $clave == aloga) {
	header("location:paginas_clientes/adrian_lopez_garcia.html");

}elseif ($usuario == algupa && $clave == algupa) {
	header("location:paginas_clientes/albina_guadalupe_pacheco.html");

}elseif ($usuario == alsoji && $clave == alsoji) {
	header("location:paginas_clientes/alejandra_sotera_romero_jimenez.html");

}elseif ($usuario == balsaba && $clave == balsaba) {
	header("location:paginas_clientes/baldomera_onorina_sanchez_bautista.html");

}elseif ($usuario == canalre && $clave == canalre) {
	header("location:paginas_clientes/candelario_alvarez_reyes.html");

}elseif ($usuario == dacasa && $clave == dacasa) {
	header("location:paginas_clientes/dalia_carolina_cruz_sanchez.html");

}elseif ($usuario == joanli && $clave == joanli) {
	header("location:paginas_clientes/jorge_angeles_lira.html");

}elseif ($usuario == macaceo && $clave == macaceo) {
	header("location:paginas_clientes/ma_del_carmen_ceron_ordaz.html");

}elseif ($usuario == naroji && $clave == naroji) {
	header("location:paginas_clientes/nadia_rodriguez_jimenez.html");

}elseif ($usuario == sanjucor && $clave == sanjucor) {
	header("location:paginas_clientes/sandra_julieta_cortes_gil.html");

}


else {
	
	echo '<script>
		alert("Error en la autentificación. ¡Ingrese usuario y contraseña correctos!");
		window.history.go(-1);
	</script>';
	exit;
}




@mysqli_free_result($resultado);
mysqli_close($conexion);



?>