<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comentario;

class Desaparecido extends Model
{
    protected $dates = ['datanasc', 'dataultimo'];
    
    public function comentarios(){
        return $this->hasMany('App\Comentario', 'desaparecido_id', 'id');
    }
}
