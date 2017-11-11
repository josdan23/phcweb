<?php 

	class Puesto {
		private $idPuesto;
		private $nombre;
		private $descripcion;
		private $idDepartamento;
		private $idNivelPuesto;

		public function __construct($idPuesto, $nombre, $descripcion, $idDepartamento, $idNivelPuesto){
			$this->idPuesto = $idPuesto;
			$this->nombre = $nombre;
			$this->descripcion = $descripcion;
			$this->idDepartamento = $idDepartamento;
			$this->idNivelPuesto = $idNivelPuesto;
		}

		
	    /**
	     * @return mixed
	     */
	    public function getIdPuesto()
	    {
	        return $this->idPuesto;
	    }

	    /**
	     * @param mixed $idPuesto
	     *
	     * @return self
	     */
	    public function setIdPuesto($idPuesto)
	    {
	        $this->idPuesto = $idPuesto;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNombre()
	    {
	        return $this->nombre;
	    }

	    /**
	     * @param mixed $nombre
	     *
	     * @return self
	     */
	    public function setNombre($nombre)
	    {
	        $this->nombre = $nombre;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDescripcion()
	    {
	        return $this->descripcion;
	    }

	    /**
	     * @param mixed $descripcion
	     *
	     * @return self
	     */
	    public function setDescripcion($descripcion)
	    {
	        $this->descripcion = $descripcion;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getIdDepartamento()
	    {
	        return $this->idDepartamento;
	    }

	    /**
	     * @param mixed $idDepartamento
	     *
	     * @return self
	     */
	    public function setIdDepartamento($idDepartamento)
	    {
	        $this->idDepartamento = $idDepartamento;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getIdNivelPuesto()
	    {
	        return $this->idNivelPuesto;
	    }

	    /**
	     * @param mixed $idNivelPuesto
	     *
	     * @return self
	     */
	    public function setIdNivelPuesto($idNivelPuesto)
	    {
	        $this->idNivelPuesto = $idNivelPuesto;

	        return $this;
	    }
}
