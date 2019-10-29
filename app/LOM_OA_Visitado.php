<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOM_OA_Visitado extends Model
{
    protected $table = 'lom_oa_visitado';

    protected $primaryKey = 'id';

    protected $fillatable = [
        
    ];


    public function user(){
        return $this->belongsTo('App\User', 'id_usuario', 'id');
    }
}
