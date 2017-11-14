<?php 

require_once("../persistencia/EntidadBase.php");

$entidad = new EntidadBase("Empleado");

$arrayEmpleados = $entidad->obtenerPorId(2);
var_dump($arrayEmpleados);
