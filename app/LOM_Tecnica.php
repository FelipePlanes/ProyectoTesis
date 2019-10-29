<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_Tecnica extends Model
{
    protected $table = 'lom_tecnica';

    protected $primaryKey = 'id';

    protected $fillatable = [
        'id_tecnica',
        'lom_tecduracion',
        'lom_tecformato',
        'lom_teclocalizacion',
        'lom_tectamano'
    ];
}
