<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Desaparecido;
use App\User;

class Comentario extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    
    public function desaparecido(){
        return $this->hasOne('App\Desaparecido', 'desaparecido_id', 'id');
    }

    public function user(){
        return $this->hasOne('App\User', 'id', 'usuario_id');
    }

}
