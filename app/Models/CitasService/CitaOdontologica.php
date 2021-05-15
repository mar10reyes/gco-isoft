<?php

namespace App\Models\CitasService;

class CitaOdontologica
{
    private $id;
    private $fecha;
    private $hora;
    private $procedimiento;
    private $paciente;

    //---------------------------

    public function __construct()
    {

    }

    //---------------------------

    //SET

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function setProcedimiento($procedimiento)
    {
        $this->procedimiento = $procedimiento;
    }

    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }


    //GET

    public function getId()
    {
        return $this->id;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function getProcedimiento()
    {
        return $this->procedimiento;
    }

    public function getPaciente()
    {
        return $this->paciente;
    }

    //---------------------------

    public function guardar()
    {
        $citaOdontologicaDAO = new CitaOdontologicaDAOImpl();
        $citaOdontologicaDAO->addCita($this);
    }

    public function actualizar()
    {
        $citaOdontologicaDAO = new CitaOdontologicaDAOImpl();
        $citaOdontologicaDAO->modCita($this);
    }

    public function obtener($idCita)
    {
        $citaOdontologicaDAO = new CitaOdontologicaDAOImpl();

        $citaOdontologicaOBJ = $citaOdontologicaDAO->getCita($idCita);
        return $citaOdontologicaOBJ;
    }

    public function eliminar()
    {
        $citaOdontologicaDAO = new CitaOdontologicaDAOImpl();
        $citaOdontologicaDAO->delCita($this->id);
    }
    
}
