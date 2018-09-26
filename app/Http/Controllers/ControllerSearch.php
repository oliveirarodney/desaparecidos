<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desaparecido;

class ControllerSearch extends Controller
{
    public function search(){
        $desaparecidos = Desaparecido::all();
        return view('search')->with('desaparecidos', $desaparecidos);
    }

    public function pesquisar(Request $request){
        $nome = $request->nome;
        $cidade = $request->uf;
        $estado = $request->estado;
        $desaparecidos = Desaparecido::where('nome', 'like', '%'.$nome.'%')
        ->get();
        return view('search')->with('desaparecidos', $desaparecidos);
    }
}
