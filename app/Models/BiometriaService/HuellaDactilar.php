<?php

namespace App\Models\BiometriaService;

use Illuminate\Database\Eloquent\Model;

class HuellaDactilar extends Model
{
    private $valor;

    //---------------------------

    public function __construct() 
    {
        
    }

    //---------------------------

    //SET

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    //GET

    public function getValor()
    {
        return $this->valor;
    }

    //---------------------------
}
