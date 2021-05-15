<?php

namespace App\Models\CitasService;

class Procedimiento
{
    private $id;
    private $nombre;
    private $duracion;

    //---------------------------

    public function __construct($nombre, $duracion) 
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
    }

    //---------------------------

    //SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    //GET

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    //---------------------------

    public function guardar()
    {
        $procedimientoDAO = new ProcedimientoDAOImpl();
        $procedimientoDAO->addProcedimiento($this);
    }

    public function obtener($idProcedimiento)
    {
        //crear el objeto procedimiento DAO
        $procedimientoDAO = new ProcedimientoDAOImpl();

        $procedimientoOBJ = $procedimientoDAO->getProcedimiento($idProcedimiento);
        return $procedimientoOBJ;
    }
}
