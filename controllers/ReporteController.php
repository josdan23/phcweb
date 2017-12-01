<?php

include_once '../persistencia/EntidadBase.php';


class ReporteController
{
    public static function obtenerConsulta1(){
        $entidad = new EntidadBase("v_consulta1");
        return $entidad->obtenerTodos();
    }

    public static function obtenerConsulta2(){
        $entidad = new EntidadBase("v_consulta2");
        return $entidad->obtenerTodos();
    }

    public static function obtenerConsulta3(){
        $entidad = new EntidadBase("v_consulta3");
        return $entidad->obtenerTodos();
    }

    public static function obtenerConsulta4(){
        $entidad = new EntidadBase("v_consulta4");
        return $entidad->obtenerTodos();
    }

    public static function obtenerConsulta5(){
        $entidad = new EntidadBase("v_consulta5");
        return $entidad->obtenerTodos();
    }
}