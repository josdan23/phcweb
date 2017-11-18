<?php

class Departamento {

	private $idDepartamento;
	private $nombre;
	private $idNivelDepartamento;

	public function __construct($nombre,$idNivelDepartamento){
		$this->nombre = $nombre;
		$this->idNivelDepartamento = $idNivelDepartamento;
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
}
