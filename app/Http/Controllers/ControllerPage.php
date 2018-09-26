<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Desaparecido;
use App\Comentario;

class ControllerPage extends Controller
{
    public function page($id){
        $desaparecido = Desaparecido::with('comentarios')->find($id);
        $coment = Comentario::with('user')->get();
        return view('page', ['desaparecido'=> $desaparecido, 'coment'=>$coment]);
    }

    public function apagarComentario($id, $comment){
        $comentario = Comentario::Find($comment);
        $comentario->delete();
        return back();
    }

    public function fazerComentario(Request $request){
        $comentario = new Comentario;
        $comentario->comentario = $request->comentario;
        $comentario->desaparecido_id = $request->id;
        $comentario->usuario_id = Auth::user()->id;
        $comentario->save();
        return back();
    }

    public function excluirDesaparecido($id){
        $desaparecido = Desaparecido::find($id);
        $desaparecido->delete();
        $desaparecidos = Desaparecido::where('usuario_id', '=', Auth::user()->id)->get();
        return view('user')->with('desaparecidos', $desaparecidos);
    }
}
