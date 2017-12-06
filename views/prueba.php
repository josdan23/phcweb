<?php

include ("../persistencia/EntidadBase.php");

$entidad = new EntidadBase("t_historial_empleado");

$valor = $entidad->obtenerHistorialXEmpleado("11");
var_dump($valor);
echo $valor;