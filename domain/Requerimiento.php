<?php 

	class Requerimiento {
		private $idRequerimiento;
		private $descripcion;

		public function __construct($idRequerimiento, $descripcion) {
			$this->idRequerimiento = $idRequerimiento;
			$this->descripcion = $descripcion;
		}

	    /**
	     * @return mixed
	     */
	    public function getIdRequerimiento()
	    {
	        return $this->idRequerimiento;
	    }

	    /**
	     * @param mixed $idRequerimiento
	     *
	     * @return self
	     */
	    public function setIdRequerimiento($idRequerimiento)
	    {
	        $this->idRequerimiento = $idRequerimiento;

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
	    
}