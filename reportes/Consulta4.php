<?php

require_once '../controllers/ReporteController.php';


$resultset = ReporteController::obtenerConsulta4();


require_once('../services/ezpdf.php');

$pdf = new Cezpdf('a4', 'landscape'); //seleccionamos tipo de hoja
$pdf->selectFont('../fonts/Helvetica.afm'); //seleccionamos fuente a utilizar
$pdf->line(20,40,815,40);
$pdf->ezText("<u><b>Gestion de Capital Humano - PHC TEAM</b></u>",30,array("justification"=>"center")); // Titulo 1
$pdf->ezText("\n", 15);  // Bajado de line de 15 de fuente
$pdf->ezText("<b>Consulta 4 - Cantidad de posiciones por departamento</b>",25,array("justification"=>"center")); // Titulo 2
$pdf->ezText("\n", 30); // Bajado de line de 30 de fuente

$pdf->addText(50, 30, 10, "<b>Fecha: </b>\n" . date("d/m/Y")); // Fecha

$cols = array(
	"Departamento" => "<b>Departamento</b>",
    "Cantidad de empleados" => "<b>Cantidad de Empleados</b>",
 );

$colOptions = array(
	"Departamento" => array('justification' => 'left', 'width' => 160),			 
	"Cantidad de empleados" => array('justification'=> 'centre',  'width' => 120),		
			 );

$options = array(
	'innerLineThickness'=> 2 ,'cols' => $colOptions 

);



$pdf->ezTable( $resultset , $cols, "", $options);//asigno la tabla



$pdf->ezStream();//creo el pdf

?>