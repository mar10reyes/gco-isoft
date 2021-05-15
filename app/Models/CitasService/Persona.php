<?php

namespace App\Models\CitasService;

class Persona
{
    protected $nombre;
    protected $identificacion;

    //---------------------------

    public function __construct() 
    {
        
    }

    //---------------------------

    //SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }


    //GET

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdentificacion()
    {
        return $this->identificacion;
    }


    //---------------------------

    public function agendarCita($fecha, $hora, $paciente, $procedimiento)
    {
        //crear el objeto cita odontologica
        $citaOdontologica = new CitaOdontologica();

        $citaOdontologica->setFecha($fecha);
        $citaOdontologica->setHora($hora);
        $citaOdontologica->setProcedimiento($procedimiento);
        $citaOdontologica->setPaciente($paciente);

        $citaOdontologica->guardar();

        //guardar el objeto en la base de datos
        //return $error;
    }

    public function cambiarProcedimiento($procedimiento, $idCita)
    {
        //crear un objeto cita
        $citaOdontologica = new CitaOdontologica();

        //buscar el objeto cita
        $citaOdontologica = $citaOdontologica->obtener($idCita);

        //verificar si se encuentra
        if($citaOdontologica != null)
        {
            //actualizar los valores del objeto
            $citaOdontologica->setProcedimiento($procedimiento);

            //actualizar la base de datos
            $citaOdontologica->actualizar();

            //informar que la actualizacion tuvo exito
            return 1;
        }

        //si no se encuentra, devolver false
        return 0;

    }

    public function reprogramarCita($fecha, $hora, $idCita)
    {
        $citaOdontologica = new CitaOdontologica();

        $citaOdontologica = $citaOdontologica->obtener($idCita);

        //verificar si se encuentra
        if($citaOdontologica != null)
        {
            //actualizar los valores del objeto
            if(isset($fecha))
            {
                $fechaOBJ = Carbon::parse($fecha)->format('Y-m-d');
                $citaOdontologica->setFecha($fecha);
            }
            
            if(isset($hora))
            {
                $citaOdontologica->setHora($hora);
            }

            //actualizar la base de datos
            $citaOdontologica->actualizar();

            //informar que la actualizacion tuvo exito
            return 1;
        }

        //si no se encuentra, devolver false
        return 0;
    }

    public function cancelarCita($idCita)
    {
        //eliminar la cita especificada y retornar si se elimino con exito
        $citaOdontologica = new CitaOdontologica();
        $citaOdontologica = $citaOdontologica->obtener($idCita);
        //dd($citaOdontologica);
        $citaOdontologica->eliminar();
    }
}
