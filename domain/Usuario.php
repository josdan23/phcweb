<?php 

class Usuario {
    private $idEmpleado;
    private $nombreUsuario;
    private $contrasenia;
    private $esAdministrador;
    private $habilitado;
    private $contraseniaRestaurada;

    public function __construct($idEmpleado, $nombreUsuario, $contrasenia, $esAdministrador, $habilitado, $contraseniaRestaurada) {

        $this->idEmpleado = $idEmpleado;
        $this->nombreUsuario = $nombreUsuario;
        $this->contrasenia = $contrasenia;
        $this->esAdministrador = $esAdministrador;
        $this->habilitado = $habilitado;
        $this->contraseniaRestaurada = $contraseniaRestaurada;
    }

    //GETTERS

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function getContrasenia() {
        return $this->contrasenia;
    }

    public function getEsAdministrador() {
        return $this->esAdministrador;
    }

    public function getHabilitado() {
        return $this->contraseniaRestaurada;
    }

    //SETTERS

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
        return $this;
    }

    public function setEsAdministrador($esAdministrador){
        $this->esAdministrador = $esAdministrador;
        return $this;
    }

    public function setHabilitado($habilitado){
        $this->habilitado = $habilitado;
        return $this;
    }

    public function setContraseniaRestaurada($contraseniaRestaurada){
        $this->contraseniaRestaurada = $contraseniaRestaurada;
        return $this;
    }
}


 ?>