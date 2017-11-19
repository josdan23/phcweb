<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/../controllers/DepartamentoController.php';
require __DIR__.'/../controllers/EmpleadoController.php';
//require __DIR__.'/../controllers/HistorialEmpleadoController.php';
require __DIR__.'/../controllers/NivelDepartamentoController.php';


//Nuevo Departamento
$departamento = "Servicio Tecnico 3";
$idNivelDepartamento = 2;
DepartamentoController::agregarDepartamento($departamento,$idNivelDepartamento);
//echo "se creo el departamento";

//Nuevo Empleado
EmpleadoController::agregarEmpleado("Avellaneda","Evelin",1199217,"2015-12-17",56600276,"20-56600276-3","1998-12-17",1,4544644,"evelin@gmail.com","Ruta 327 Km 12","F");

//Nuevo HistorialEmpleado, esta entidad no se manipula desde la aplicacion
//HistorialEmpleadoController::agregarHistorialEmpleado($fechaIngreso,$fechaEgreso,$idEmpleado,$idPuesto);

//Nuevo NivelDepartamento
NivelDepartamentoController::agregarNivelDepartamento("Operativo");

?>
