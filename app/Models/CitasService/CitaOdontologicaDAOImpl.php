<?php

namespace App\Models\CitasService;

use Illuminate\Database\Eloquent\Model;

class CitaOdontologicaDAOImpl extends Model
{
    protected $table = 'citas_odontologicas';
    protected $fillable = ['id', 'fecha','hora', 'procedimiento_id', 'paciente_id'];
    protected $casts = ['fecha' => 'date', 'hora' => 'integer'];

    public function addCita($cita)
    {
        //crear el objeto cita odontologica
        $citaOdontologicaDAO = CitaOdontologicaDAOImpl::create([
            'fecha' => $cita->getFecha(), 
            'hora' => $cita->getHora(), 
            'procedimiento_id' => $cita->getProcedimiento(), 
            'paciente_id' => $cita->getPaciente()
        ]);
    }

    public function getCitas($fechaInicio, $fechaFin, $propietario)
    {
        //obtener las citas de la base de datos
        $citasOdontologicasDB = CitaOdontologicaDAOImpl::where('fecha','>=', $fechaInicio)->where('fecha','<=', $fechaFin)->get();

        //castear a objetos
        $citasOdontologicasOBJ = array();

        foreach($citasOdontologicasDB as $citaOdontologicaDB)
        {
            $id            = $citaOdontologicaDB->attributes['id'];
            $fecha         = $citaOdontologicaDB->attributes['fecha'];
            $hora          = $citaOdontologicaDB->attributes['hora'];
            $procedimiento = $citaOdontologicaDB->attributes['procedimiento_id'];
            $paciente      = $citaOdontologicaDB->attributes['paciente_id'];

            //crear objeto
            $nuevaCitaOdontologica = new CitaOdontologica();
            
            $nuevaCitaOdontologica->setId($id);
            $nuevaCitaOdontologica->setFecha($fecha);
            $nuevaCitaOdontologica->setHora($hora);
            $nuevaCitaOdontologica->setProcedimiento($procedimiento);
            $nuevaCitaOdontologica->setPaciente($paciente);


            //agregar objeto al array
            $citasOdontologicasOBJ[] = $nuevaCitaOdontologica;
        }

        return $citasOdontologicasOBJ;
    }

    public function getCita($idCita)
    {
        $citaOdontologicaDAO = CitaOdontologicaDAOImpl::find($idCita);

        $id            = $citaOdontologicaDAO->attributes['id'];
        $fecha         = $citaOdontologicaDAO->attributes['fecha'];
        $hora          = $citaOdontologicaDAO->attributes['hora'];
        $procedimiento = $citaOdontologicaDAO->attributes['procedimiento_id'];
        $paciente      = $citaOdontologicaDAO->attributes['paciente_id'];

        //crear objeto
        $nuevaCitaOdontologica = new CitaOdontologica();
            
        $nuevaCitaOdontologica->setId($id);
        $nuevaCitaOdontologica->setFecha($fecha);
        $nuevaCitaOdontologica->setHora($hora);
        $nuevaCitaOdontologica->setProcedimiento($procedimiento);
        $nuevaCitaOdontologica->setPaciente($paciente);

        //retornar la cita
        return $nuevaCitaOdontologica;
    }

    public function delCita($idCita)
    {
        CitaOdontologicaDAOImpl::destroy($idCita);
    }

    public function modCita($cita)
    {
        //crear el objeto DAO de cita odontologica
        $citaOdontologicaDAO = CitaOdontologicaDAOImpl::make([
            'id' => $cita->getId(),
            'fecha' => $cita->getFecha(), 
            'hora' => $cita->getHora(), 
            'procedimiento_id' => $cita->getProcedimiento(), 
            'paciente_id' => $cita->getPaciente()
        ]);

        //actualizar los valores en la base de datos
        CitaOdontologicaDAOImpl::where('id', $cita->getId())->update([
            'fecha' => $cita->getFecha(), 
            'hora' => $cita->getHora(), 
            'procedimiento_id' => $cita->getProcedimiento(), 
            'paciente_id' => $cita->getPaciente()
        ]);
    }
}
