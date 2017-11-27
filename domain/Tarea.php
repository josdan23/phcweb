<?php 

	class Tarea {

		private $idTarea;
		private $descripcion;


		public function __construct($descripcion) {
			$this->descripcion = $descripcion;
		}


	    /**
	     * @return mixed
	     */
	    public function getIdTarea()
	    {
	        return $this->idTarea;
	    }

	    /**
	     * @param mixed $idTarea
	     *
	     * @return self
	     */
	    public function setIdTarea($idTarea)
	    {
	        $this->idTarea = $idTarea;

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