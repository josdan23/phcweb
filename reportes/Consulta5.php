<?php

require_once '../controllers/ReporteController.php';
require_once('../persistencia/EntidadBase.php');

//$prueba = new EntidadBase("t_departamento");

//$resultset = $prueba->obtenerTodos() ;

$resultset = ReporteController::obtenerConsulta5();


require_once('../services/ezpdf.php');

$pdf = new Cezpdf('a4', 'landscape'); //seleccionamos tipo de hoja
$pdf->selectFont('../fonts/Helvetica.afm'); //seleccionamos fuente a utilizar
$pdf->line(20,40,815,40);
$pdf->ezText("<u><b>Gestion de Capital Humano - PHC TEAM</b></u>",30,array("justification"=>"center")); // Titulo 1
$pdf->ezText("\n", 15);  // Bajado de line de 15 de fuente
$pdf->ezText("<b>Consulta 5 - Listado de empleados que trabajan en mas de un departamento</b>",20,array("justification"=>"center")); // Titulo 2
$pdf->ezText("\n", 30); // Bajado de line de 30 de fuente

$pdf->addText(50, 30, 10, "<b>Fecha: </b>\n" . date("d/m/Y")); // Fecha

$cols = array(
	"id" => "<b>Id</b>",
    "Nombre" => "<b>Nombre</b>",
    "Apellido" => "<b>Apellido</b>",
    "Puesto" => "<b>Puesto</b>",
    "Departamento" => "<b>Departamento</b>",
    "Anos" => "<b>Anos</b>",
	"Meses" => "<b>Meses</b>",
	"Anos-Meses" => "<b>Anos-Meses</b>",

 );

$colOptions = array("id" => array('justification' => 'center', 'width' => 30), 				 'Nombre' => array('justification'=> 'left',  'width' => 70),
				'Apellido' => array('justification'=> 'leftr',  'width' => 70),
				'Puesto' => array('justification'=> 'left',  'width' => 120),
			    'Departamento' => array('justification'=> 'left',  'width' => 150),
				'Anos' => array('justification'=> 'center',  'width' => 40),
			 	'Meses' => array('justification'=> 'center',  'width' => 50),
			 	'Anos-Meses' => array('justification'=> 'center',  'width' => 60),
			 );



$options = array(
	'innerLineThickness'=> 2 ,'cols' => $colOptions ,

);


$pdf->ezTable( $resultset , $cols, "", $options);//asigno la tabla


$pdf->ezStream();//creo el pdf

?>