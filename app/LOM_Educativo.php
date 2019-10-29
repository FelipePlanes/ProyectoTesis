<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Educativo extends Model
{
    protected $table = 'lom_educativo';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
        'lom_educdescripcion',
        'lom_educnivel_interactividad',
        'lom_eductipo_interactividad',
        'lom_educrecurso_educativo'
    ];
}
