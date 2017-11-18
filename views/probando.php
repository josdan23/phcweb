<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

//require_once("../persistencia/EntidadBase.php");

require __DIR__.'/../controllers/DepartamentoController.php';
//require __DIR__.'/../persistencia/EntidadBase.php';

$departamento = "Servicio Tecnico 2";
$idNivelDepartamento = 2;

DepartamentoController::agregarDepartamento($departamento,$idNivelDepartamento);
//echo "se creo el departamento";

?>
