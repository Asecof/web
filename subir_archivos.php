<?php

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		
			echo '<script>
		alert("Archivo subido con éxito");
		window.history.go(-1);
	</script>';
	exit;

		}else{
			echo "El Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			
			echo '<script>
		alert("Archivo subido con éxito");
		window.history.go(-1);
	</script>';
	exit;


		}else{
			echo "El Archivo no se pudo guardar";
		}

}

?>