<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_General extends Model
{
    protected $table = 'lom_general';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
        'lom_genambito',
        'lom_gendescripcion',
        'lom_genidentificador',
        'lom_genpalabra_clave',
        'lom_gentitulo'
    ];
}
