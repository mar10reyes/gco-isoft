<?php

namespace App\Models\CitasService;

use Illuminate\Database\Eloquent\Model;

class PacienteDAOImpl extends Model
{
    protected $table = 'pacientes';
    protected $fillable = ['nombre','identificacion', 'padecimiento'];
    protected $primaryKey = 'identificacion';

    public function addPaciente($paciente)
    {
        //crear el objeto cita odontologica
        $pacienteDAO = PacienteDAOImpl::create([
            'nombre' => $paciente->getNombre(), 
            'identificacion' => $paciente->getIdentificacion(), 
            'padecimiento' => $paciente->getPadecimiento() 
        ]);
    }

    public function getPaciente($idPaciente)
    {
        $PacienteDAO = PacienteDAOImpl::find($idPaciente);

        $nombre         = $PacienteDAO->attributes['nombre'];
        $identificacion = $PacienteDAO->attributes['identificacion'];
        $padecimiento   = $PacienteDAO->attributes['padecimiento'];

        $nuevoPaciente = new Paciente();
            
        $nuevoPaciente->setNombre($nombre);
        $nuevoPaciente->setIdentificacion($identificacion);
        $nuevoPaciente->setPadecimiento($padecimiento);

        //retornar la cita
        return $nuevoPaciente;
    }
}
