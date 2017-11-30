<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once '../controllers/DepartamentoController.php';
include_once '../controllers/EmpleadoController.php';
include_once '../controllers/NivelDepartamentoController.php';
include_once '../controllers/NivelPuestoController.php';
include_once '../controllers/PuestoController.php';
include_once '../controllers/RequerimientoController.php';
include_once '../controllers/TareaController.php';
include_once '../controllers/UsuarioController.php';


echo'PRUEBAS DE AGREGAR ENTIDADES<br><br>';

//Nuevo Departamento
DepartamentoController::agregarDepartamento("Servicio Tecnico 6",2);

//Nuevo Empleado
EmpleadoController::agregarEmpleado("Avellaneda","Evelin",1199217,"2015-12-17",56600276,"20-56600276-3","1998-12-17",1,4544644,"evelin@gmail.com","Ruta 327 Km 12","F");

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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE OBTENER TODAS LAS ENTIDADES<br><br>';

//Obtener Departamentos
$array = DepartamentoController::obtenerDepartamentos();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Departamentos<br>' : print 'Error al obtener los Departamentos<br>';

//Obtener Empleados
$array = EmpleadoController::obtenerEmpleados();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Empleados<br>' : print 'Error al obtener los Empleados<br>';

//Obtener Niveles de Departamento
$array = NivelDepartamentoController::obtenerNivelDepartamentos();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Niveles de departamento<br>' : print 'Error al obtener los Niveles de departamento<br>';

//Obtener Niveles de Puestos
$array = NivelPuestoController::obtenerNivelPuestos();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Niveles de los Puestos<br>' : print 'Error al obtener los Niveles de los Puestos<br>';

//Obtener Puestos
$array = PuestoController::obtenerPuestos();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Puestos<br>' : print 'Error al obtener los Puestos<br>';

//Obtener Requerimientos
$array = RequerimientoController::obtenerRequerimientos();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Requerimientos<br>' : print 'Error al obtener los Requerimientos<br>';

//Obtener Tareas
$array = TareaController::obtenerTareas();// var_dump($array);
($array) ? print 'Se obtuvieron todos las Tareas<br>' : print 'Error al obtener las Tareas<br>';

//Obtener Usuarios
$array = UsuarioController::obtenerUsuarios();// var_dump($array);
($array) ? print 'Se obtuvieron todos los Usuarios<br>' : print 'Error al obtener los Usuarios<br>';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE OBTENER UNA ENTIDAD<br><br>';

$array = DepartamentoController::obtenerUnDepartamento(1);// var_dump($array);
($array) ? print 'Se obtuvo un Departamento<br>' : print 'Error al obtener el Departamento<br>';

$array = EmpleadoController::obtenerUnEmpleado(1);// var_dump($array);
($array) ? print 'Se obtuvo un Empleado<br>' : print 'Error al obtener el Empleado<br>';

$array = NivelDepartamentoController::obtenerUnNivelDepartamento(1);// var_dump($array);
($array) ? print 'Se obtuvo un Nivel de Departamento<br>' : print 'Error al obtener el Nivel de Departamento<br>';

$array = NivelPuestoController::obtenerUnNivelPuesto(1);// var_dump($array);
($array) ? print 'Se obtuvo un Nivel de Puesto<br>' : print 'Error al obtener el Nivel de Puesto<br>';

$array = PuestoController::obtenerUnPuesto(1);// var_dump($array);
($array) ? print 'Se obtuvo un Puesto<br>' : print 'Error al obtener el Puesto<br>';

$array = RequerimientoController::obtenerUnRequerimiento(1);// var_dump($array);
($array) ? print 'Se obtuvo un Requerimiento<br>' : print 'Error al obtener el Requerimiento<br>';

$array = TareaController::obtenerUnaTarea(1);// var_dump($array);
($array) ? print 'Se obtuvo una Tarea<br>' : print 'Error al obtener la Tarea<br>';

$array = UsuarioController::obtenerUnUsuario(4);// var_dump($array);
($array) ? print 'Se obtuvo un Usuario<br>' : print 'Error al obtener el Usuario <br>';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE ELIMINAR UNA ENTIDAD<br><br>';

DepartamentoController::eliminarDepartamento(15);
echo 'Eliminado el Departamento<br>';

EmpleadoController::eliminarEmpleado(12);
echo 'Eliminado el Empleado<br>';

NivelDepartamentoController::eliminarNivelDepartamento(4);
echo 'Eliminado el Nivel de Departamento<br>';

NivelPuestoController::eliminarNivelPuesto(18);
echo 'Eliminado el Nivel de Puesto<br>';

PuestoController::eliminarPuesto(15);
echo 'Eliminado el Puesto<br>';

RequerimientoController::eliminarRequerimiento(5);
echo 'Eliminado el Requerimiento<br>';

TareaController::eliminarTarea(4);
echo 'Eliminado la Tarea<br>';

UsuarioController::eliminarUsuario(6);
echo 'Eliminado el Usuario<br>';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE MODIFICAR UNA ENTIDAD<br><br>';

DepartamentoController::modificarDepartamento(16,'nombreDptoModificado',2);

EmpleadoController::modificarEmpleado(11,"espeche","nora",3435,"2012-11-17",12607355,"20-12607366","1956-11-05",1,8585839,"noraespeche@gmail.com","B° Oeste 2","F");

NivelDepartamentoController::modificarNivelDepartamento(3,"soporte");

NivelPuestoController::modificarNivelPuesto(4,"Responsable de Martin para que no haga cagadas");

PuestoController:: modificarPuesto(17,"lavadero", "lugar donde se lava la ropa", 5, 3);

RequerimientoController::modificarRequerimiento(6,"Ingeniero electrico");

TareaController::modificarTarea(5,"Se encarga de oler las oyas");

UsuarioController::modificarUsuario(4, 'alexis', 'Soria', 0, 1, 0);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE VINCULACIONES<br><br>';

EmpleadoController::asignarPuestoAEmpleado(6, 1);
PuestoController::asignarPuestoAEmpleado(2, 1);

PuestoController::asignarRequerimientoAPuesto(3,9);
RequerimientoController::asignarRequerimientoAPuesto(2,9);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE DESVINCULACIONES<br><br>';

EmpleadoController::sacarEmpleadoDelPuesto(6, 6);
PuestoController::sacarEmpleadoDelPuesto(8,7);

PuestoController::sacarRequerimientoDelPuesto(3,9);
RequerimientoController::sacarRequerimientoDelPuesto(2,9);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE FILTROS<br><br>';

//PuestoController::obtenerEmpleadosQueOcupanElPuesto(14);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo'<br>PRUEBAS DE CONSULTAS QUE PIDIÓ CORDERO<br><br>';


?>
