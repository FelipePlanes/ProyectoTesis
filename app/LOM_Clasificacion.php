<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Clasificacion extends Model
{
    protected $table = 'lom_clasificacion';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
        'lom_cladescripcion',
        'lom_clapalabra_clave',
        'lom_claproposito'
    ];
}
