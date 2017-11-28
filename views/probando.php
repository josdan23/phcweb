<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once '../controllers/DepartamentoController.php';
include_once '../controllers/EmpleadoController.php';
//require __DIR__.'/../controllers/HistorialEmpleadoController.php';
include_once '../controllers/NivelDepartamentoController.php';
include_once '../controllers/NivelPuestoController.php';
include_once '../controllers/PuestoController.php';
include_once '../controllers/RequerimientoController.php';
include_once '../controllers/TareaController.php';
include_once '../controllers/UsuarioController.php';


///////PRUEBAS DE AGREGAR ENTIDADES

//Nuevo Departamento
DepartamentoController::agregarDepartamento("Servicio Tecnico 6",2);

//Nuevo Empleado
EmpleadoController::agregarEmpleado("Avellaneda","Evelin",1199217,"2015-12-17",56600276,"20-56600276-3","1998-12-17",1,4544644,"evelin@gmail.com","Ruta 327 Km 12","F");

//Nuevo HistorialEmpleado, esta entidad no se manipula desde la aplicacion
//HistorialEmpleadoController::agregarHistorialEmpleado($fechaIngreso,$fechaEgreso,$idEmpleado,$idPuesto);

//Nuevo NivelDepartamento
NivelDepartamentoController::agregarNivelDepartamento("Nivel 4");

//Nuevo NivelPuestoController
NivelPuestoController::agregarNivelPuesto("Responsable del puesto");

//Nuevo puesto
PuestoController::agregarPuesto("Limpieza", "Encargado de realizar la limpieza de todos los espacios fisicos", 5,3);

//Nuevo Requerimiento
RequerimientoController::agregarRequerimiento("Ingeniero En Sistemas");

//Nueva Tarea
TareaController::agregarTarea("Se encarga de realizar todos los tramites administrativos");

//Nuevo Usuario (para que esta prueba tenga éxito, el usuario no debe existir en la bd)
UsuarioController::agregarUsuario(6, 'mariano', 'mariano', 0, 1, 0);


///////PRUEBAS DE OBTENER ENTIDADES

//Obtener Empleados
//$array = EmpleadoController::obtenerEmpleados();
//var_dump($array);

?>
