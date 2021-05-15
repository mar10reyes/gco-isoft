<?php

namespace App\Models\BiometriaService;

use Illuminate\Database\Eloquent\Model;

interface BiometriaServiceDAO extends Model
{
    public function autenticar($persona);
    
    public function addHuellaDactilar($persona);

    public function getHuellaDactilar($persona);

    public function delHuellaDactilar($persona);

    public function modHuellaDactilar($huellaDactilar, $persona);
}
