<?php

class NivelDepartamento {

	private $idNivelDepartamento;
	private $nombre;
	
	public function __construct($nombre){
		$this->nombre = $nombre;
	}
	

    /**
     * @return mixed
     */
    public function getIdNivelDepartamento()
    {
        return $this->idNivelDepartamento;
    }

    /**
     * @param mixed $idNivelDepartamento
     *
     * @return self
     */
    public function setIdNivelDepartamento($idNivelDepartamento)
    {
        $this->idNivelDepartamento = $idNivelDepartamento;

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
}