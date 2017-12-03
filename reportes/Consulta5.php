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
$pdf->ezText("<b> Consulta 5 </b>",25); // Titulo 2
$pdf->ezText("\n", 30); // Bajado de line de 30 de fuente

$pdf->addText(50, 30, 10, "<b>Fecha: </b>\n" . date("d/m/Y")); // Fecha

$cols = array(
	"id" => "bar0",
    "Nombre" => "bar",
    "Apellido" => "bar1",
    "Puesto" => "bar2",
    "Departamento" => "bar3",
    "Años" => "bar4",
	"Meses" => "bar5",
	"Años-Meses" => "bar6",

    //"bar" => "foo",
 );

$options = array(
	'innerLineThickness'=> 5 ,

);


$pdf->ezTable( $resultset, $cols);//asigno la tabla


$pdf->ezStream();//creo el pdf

?>