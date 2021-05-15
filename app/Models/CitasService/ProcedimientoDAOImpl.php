<?php

namespace App\Models\CitasService;

use Illuminate\Database\Eloquent\Model;

class ProcedimientoDAOImpl extends Model
{
    protected $table = 'procedimientos';
    protected $fillable = ['nombre','duracion'];

    public function addProcedimiento($procedimiento)
    {
        $procedimientoDAO = ProcedimientoDAOImpl::create([
            'nombre' => $procedimiento->getNombre(), 
            'duracion' => $procedimiento->getDuracion()
        ]);
    }

    public function getProcedimeinto($idProcedimiento)
    {
        $procedimientoDAO = ProcedimientoDAOImpl::find($idProcedimiento);

        $id            = $procedimientoDAO->attributes['id'];
        $nombre        = $procedimientoDAO->attributes['nombre'];
        $duracion      = $procedimientoDAO->attributes['duracion'];
        
        //crear objeto
        $nuevoProcedimiento = new Procedimiento();
            
        $nuevoProcedimiento->setId($id);
        $nuevoProcedimiento->setNombre($nombre);
        $nuevoProcedimiento->setDuracion($duracion);

        //retornar procedimiento
        return $nuevoProcedimiento;
    }
}
