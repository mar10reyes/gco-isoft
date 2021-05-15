<?php

namespace App\Models\CitasService;

class Agenda
{
    private $citasOdontologicas;
    private $fechaInicio;
    private $fechaFin;
    private $propietario;

    //---------------------------

    public function __construct($fechaInicio, $fechaFin, $propietario) 
    {
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;

        if($propietario == null)
        {
            //$this->citasOdontologicas = CitaOdontologicaDAOImpl::where('fecha','>=', $fechaInicio)->where('fecha','<=', $fechaFin)->get();
            $citaOdontologicaDAOImpl = new CitaOdontologicaDAOImpl();
            $this->citasOdontologicas = $citaOdontologicaDAOImpl->getCitas($fechaInicio, $fechaFin, null);
        }
        else
        {
            $this->propietario = $propietario;
            $this->citasOdontologicas = $citaOdontologicaDAOImpl->getCitas($fechaInicio, $fechaFin, $propietario);
        }
    }

    //---------------------------

    //SET

    public function setCitasOdontologicas($citasOdontologicas)
    {
        $this->citasOdontologicas = $citasOdontologicas;
    }

    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }

    //GET

    public function getCitasOdontologicas()
    {
        return $this->citasOdontologicas;
    }

    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    //---------------------------
}
