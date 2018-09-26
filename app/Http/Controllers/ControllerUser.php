<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Desaparecido;

class ControllerUser extends Controller
{
    public function user(){
        $usuario = Auth::user();
        $desaparecidos = Desaparecido::where('usuario_id', '=', $usuario->id)->get();
        return view('user')->with('desaparecidos', $desaparecidos);
    }

    public function showRequests(){
        
    }
}
