<?php

namespace App\Models\CitasService;

class TrabajadorOdontologia
{
    private $cargo;
    
    //---------------------------

    public function __construct() 
    {
        
    }

    //---------------------------
    
    public function listarCitas($fechaInicio, $fechaFin)
    {
        //crear la agenda
        $agenda = new Agenda($fechaInicio, $fechaFin, null);

        //retornar los datos
        return $agenda;
    }

    public function agregarProcedimiento($nombre, $duracion)
    {
        //crear procedimiento
        $procedimiento = new Procedimiento($nombre, $duracion);

        //guardar
        $procedimiento->guardar();

    }

}
