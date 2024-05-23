<?php

$archivo = $_POST['archivo'];


function exception_error_handler($errno,$errtr,$errfile,$errline)
{
	throw new ErrorException($errstr,0,$no,$errline);
	
}

set_error_handler("exception_error_handler");

try {

if ($archivo == '') {
		
		echo '<script>
		alert("Ingrese el nombre del archivo");
		window.history.go(-1);
	</script>';
	exit;
	}
	
	

	    if ($archivo == 'AdrianLopezGarcia.pdf') 
		if(unlink('archivos/AdrianLopezGarcia.pdf')) 


	{
	
		echo '<script>
		alert("Archivo AdrianLopezGarcia.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;

	} 

	

	

			if ($archivo == 'AlejandroLeon.pdf')
			if(unlink('archivos/AlejandroLeon.pdf'))
		{
		
		
		echo '<script>
		alert("Archivo AlejandroLeon.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 

	
	
	
		if($archivo == 'CarmenCeron.pdf')
			if(unlink('archivos/CarmenCeron.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo CarmenCeron.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


		if ($archivo == 'DaliaCarolinaCruz.pdf')
			if(unlink('archivos/DaliaCarolinaCruz.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo DaliaCarolinaCruz.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


	 	if ($archivo == 'SandraJulietaCortes.pdf')
			if(unlink('archivos/SandraJulietaCortes.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo SandraJulietaCortes.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


		if ($archivo == 'JorgeAngelesLira.pdf')
			if(unlink('archivos/JorgeAngelesLira.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo JorgeAngelesLira.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


	 	if ($archivo == 'MiguelRobertoCruz.pdf')
			if(unlink('archivos/MiguelRobertoCruz.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo MiguelRobertoCruz.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


		if ($archivo == 'CandelarioAlvarez.pdf')
			if(unlink('archivos/CandelarioAlvarez.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo CandelarioAlvarez.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


		if ($archivo == 'NadiaRodriguez.pdf')
			if(unlink('archivos/NadiaRodriguez.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo NadiaRodriguez.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


	 	if ($archivo == 'AlbinaGuadalupePacheco.pdf')
			if(unlink('archivos/AlbinaGuadalupePacheco.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo AlbinaGuadalupePacheco.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


	 	if ($archivo == 'AlejandraSoteraRomero.pdf')
			if(unlink('archivos/AlejandraSoteraRomero.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo AlejandraSoteraRomero.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


		if ($archivo == 'JoseJesusHernandez.pdf')
			if(unlink('archivos/JoseJesusHernandez.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo JoseJesusHernandez.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	} 


	 	if ($archivo == 'BaldomeraOnorinaSanchez.pdf')
			if(unlink('archivos/BaldomeraOnorinaSanchez.pdf'))
		
		{
		
		echo '<script>
		alert("Archivo BaldomeraOnorinaSanchez.pdf eliminado");
		window.history.go(-1);
	</script>';
	exit;
	}


	
			
		else{
			
			echo '<script>
		alert("Archivo no eliminado");
		window.history.go(-1);
	</script>';
	exit;
		}

		
if ($archivo != 'AdrianLopezGarcia.pdf' && 'AlejandroLeon.pdf' && 'CarmenCeron.pdf' && 'DaliaCarolinaCruz.pdf' && 'SandraJulietaCortes.pdf'
		&& 'JorgeAngelesLira.pdf' && 'MiguelRobertoCruz.pdf' && 'CandelarioAlvarez.pdf' && 'NadiaRodriguez.pdf'
		&& 'AlbinaGuadalupePacheco.pdf' && 'AlejandraSoteraRomero.pdf' && 'JoseJesusHernandez.pdf' && 'BaldomeraOnorinaSanchez.pdf') {
		
		echo '<script>
		alert("Por favor, ¡Ingrese un archivo valido!");
		window.history.go(-1);
	</script>';
	exit;
	}


	} catch (Exception $e) 
{
	echo "Se ha producido una Excepcion". $e->getMessage()."<br/>\n";
 	
 } 



	


	


?>