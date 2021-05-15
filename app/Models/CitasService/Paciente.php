<?php

namespace App\Models\CitasService;

class Paciente extends Persona
{
    private $padecimiento;

    //---------------------------

    public function __construct() 
    {
        
    }

    //---------------------------

    //SET

    public function setPadecimiento($padecimiento)
    {
        $this->padecimiento = $padecimiento;
    }

    //GET

    public function getPadecimiento()
    {
        return $this->padecimiento;
    }

    //---------------------------
    
    public function citasAsignadas($fechaActual, $fechaCorte)
    {
        $agenda = new Agenda($fechaActual, $fechaCorte, $this->identificacion);
        return $agenda;
    }

    public function guardar()
    {
        $pacienteDAO = new PacienteDAOImpl();
        $pacienteDAO->addPaciente($this);
    }

    public function obtener($idPaciente)
    {
        $pacienteDAO = new PacienteDAOImpl();

        $pacienteOBJ = $pacienteDAO->getPaciente($idPaciente);
        return $pacienteOBJ;
    }

}
