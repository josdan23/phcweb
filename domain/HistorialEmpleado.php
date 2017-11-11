<?php

class HistorialEmpleado {

	private $idHistorialEmpleado;
	private $fechaIngreso;
	private $fechaEgreso;
	private $idEmpleado;
	private $idPuesto;

	public function __construct($fechaIngreso,$fechaEgreso,$idEmpleado,$idPuesto){
		$this->fechaIngreso = $fechaIngreso;
		$this->fechaEgreso = $fechaEgreso;
		$this->idEmpleado = $idEmpleado;
		$this->idPuesto = $idPuesto;
	}

	
	


    /**
     * @return mixed
     */
    public function getIdHistorialEmpleado()
    {
        return $this->idHistorialEmpleado;
    }

    /**
     * @param mixed $idHistorialEmpleado
     *
     * @return self
     */
    public function setIdHistorialEmpleado($idHistorialEmpleado)
    {
        $this->idHistorialEmpleado = $idHistorialEmpleado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * @param mixed $fechaIngreso
     *
     * @return self
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaEgreso()
    {
        return $this->fechaEgreso;
    }

    /**
     * @param mixed $fechaEgreso
     *
     * @return self
     */
    public function setFechaEgreso($fechaEgreso)
    {
        $this->fechaEgreso = $fechaEgreso;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
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
}