<?php

namespace App\Models\BiometriaService;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $huellaDactilar;
    protected $identificacion;

    //---------------------------

    public function __construct() 
    {
        
    }

    //---------------------------

    //SET

    public function setHuellaDactilar($huellaDactilar)
    {
        $this->huellaDactilar = $huellaDactilar;
    }

    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }


    //GET

    public function getHuellaDactilar()
    {
        return $this->huellaDactilar;
    }

    public function getIdentificacion()
    {
        return $this->identificacion;
    }

}
