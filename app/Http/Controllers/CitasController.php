<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CitasService\CitaOdontologica;
use App\Models\CitasService\Agenda;
use App\Models\CitasService\TrabajadorOdontologia;
use App\Models\CitasService\Paciente;

use Carbon\Carbon;

class CitasController extends Controller
{
    
    public function agendarCita($fecha, $hora, $procedimiento, $paciente, $nombrePaciente, $padecimiento)
    {
        if(auth()->user()->tipo == 1)
        {
            $paciente = new Paciente();
            $paciente->setNombre($nombrePaciente);
            $paciente->setIdentificacion($paciente);
            $paciente->setPadecimiento($padecimiento);
        }
        else if(auth()->user()->tipo == 2)
        {
            $paciente = new Paciente();
            $paciente->setNombre(auth()->user()->name);
            $paciente->setIdentificacion(auth()->user()->identificacion);
            $paciente->setPadecimiento($padecimiento);
        }
        else
        {
            return 0;
        }

        $paciente->agendarCita($fecha, $hora, $paciente, $procedimiento);
        $paciente->guardar();
    }

    public function cancelarCita($idCita)
    {
        $persona = new Persona();
        $persona->cancelarCita($idCita);
    }

    public function reprogramarCita($idCita, $fecha, $hora)
    {
        if(!isset($fecha) and !isset($hora))
        {
            return 0;
        }

        $persona = new Persona();
        $persona->reprogramarCita($fecha, $hora, $idCita);
    }

    public function cambiarProcedimiento($idCita, $procedimiento)
    {
        $paciente = new Persona();
        $paciente->cambiarProcedimiento($idCita, $procedimiento);

    }

    public function listarCitas($fechaInicio, $fechaFin, $propietario)
    {
        //$propietario = null;
        $fechaInicio1 = Carbon::parse($fechaInicio)->format('Y-m-d');
        $fechaFin1 = Carbon::parse($fechaFin)->format('Y-m-d');

        if(auth()->user()->tipo == 1)
        {
            $trabajadorOdontologia = new TrabajadorOdontologia();
            $agenda = $trabajadorOdontologia->listarCitas($fechaInicio, $fechaFin);

            return $agenda;
        }
        else if(auth()->user()->tipo == 2)
        {
            $paciente = new Paciente();
            $paciente->setIdentificacion(auth()->user()->name);
            
            $agenda = $paciente->citasAsignadas($fechaInicio1, $fechaFin1);

            return $agenda;
        }

    }
    
}
