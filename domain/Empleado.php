<?php

class Empleado {

	private $idEmpleado;
	private $apellido;
	private $nombre;
	private $legajo;
	private $fechaIngreso;
	private $dni;
	private $cuil;
	private $fechaNacimiento;
	private $esActivo;
	private $telefono;
	private $email;
	private $domicilio;
	private $sexo;
	

	public function __construct($apellido,$nombre,$legajo,$fechaIngreso,$dni,$cuil,$fechaNacimiento,$esActivo,$telefono,$email,$domicilio,$sexo){

		$this->apellido = $apellido;
		$this->nombre = $nombre;
		$this->legajo = $legajo;
		$this->fechaIngreso = $fechaIngreso;
		$this->dni = $dni;
		$this->cuil = $cuil;
		$this->fechaNacimiento = $fechaNacimiento;
		$this->esActivo = $esActivo;
		$this->telefono = $telefono;
		$this->email = $email;
		$this->domicilio = $domicilio;
		$this->sexo = $sexo;

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
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

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
    public function getLegajo()
    {
        return $this->legajo;
    }

    /**
     * @param mixed $legajo
     *
     * @return self
     */
    public function setLegajo($legajo)
    {
        $this->legajo = $legajo;

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
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     *
     * @return self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuil()
    {
        return $this->cuil;
    }

    /**
     * @param mixed $cuil
     *
     * @return self
     */
    public function setCuil($cuil)
    {
        $this->cuil = $cuil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     *
     * @return self
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEsActivo()
    {
        return $this->esActivo;
    }

    /**
     * @param mixed $esActivo
     *
     * @return self
     */
    public function setEsActivo($esActivo)
    {
        $this->esActivo = $esActivo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * @param mixed $domicilio
     *
     * @return self
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}