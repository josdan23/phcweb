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

		public function setIdEmpleado($idEmpleado) {
			$this->idEmpleado = $idEmpleado;
		}

		public function setNombreEmpleado($nombreEmpleado) {
			$this->nombreEmpleado = $nombreEmplado;
		}

		public function setContrasenia($contrasenia) {
			$this->contrasenia = $contrasenia;
		}

	
    /**
     * @param mixed $idEmpleado
     *
     * @return self
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * @param mixed $nombreUsuario
     *
     * @return self
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * @param mixed $contrasenia
     *
     * @return self
     */
    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;

        return $this;
    }

    /**
     * @param mixed $esAdministrador
     *
     * @return self
     */
    public function setEsAdministrador($esAdministrador)
    {
        $this->esAdministrador = $esAdministrador;

        return $this;
    }

    /**
     * @param mixed $habilitado
     *
     * @return self
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * @param mixed $contraseniaRestaurada
     *
     * @return self
     */
    public function setContraseniaRestaurada($contraseniaRestaurada)
    {
        $this->contraseniaRestaurada = $contraseniaRestaurada;

        return $this;
    }
}


 ?>