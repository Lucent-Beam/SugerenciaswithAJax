<?php

$sugerencia = '';
$datosRecibidos = $_POST['datos'];
$sugerencias = array(

	"Anita",
	"Azul",
	"Ana",
	"Bicho",
	"Carlos",
	"Diente",
	"Festin",
	"Falstad",

	);


 if(strlen($datosRecibidos)>0)
 	{
 		for ($i=0; $i < count($sugerencias); $i++) 
 			{ 
 				if (strtolower($datosRecibidos) == strtolower(substr($sugerencias[$i], 0, strlen($datosRecibidos))))
 						{    

 							if ($sugerencia == '')
 							{
 								$sugerencia = $sugerencias[$i];
 							}
 					

 							else {

								   $sugerencia = $sugerencia . ' , ' . $sugerencias[$i];
 								 }

 					  }
 			}


 	}

if ( $sugerencia == '')
{
	$sugerencia = "No hay sugerencias";

}

echo $sugerencia;


?>