<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_OA extends Model
{
    protected $table = 'lom_oa';

    protected $primaryKey = 'id';

    protected $fillatable = [

        'id_educativo',
        'id_general',
        'id_clasificacion',
        'id_tecnica'
        
    ];
}
