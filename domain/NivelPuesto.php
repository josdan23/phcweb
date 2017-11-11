<?php 

class NivelPuesto {
	private $idNivelPuesto;
	private $descripcion;

	public function __construct($idNivelPuesto, $descripcion) {
		$this->idNivelPuesto = $idNivelPuesto;
		$this->descripcion = $descripcion;
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