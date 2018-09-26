<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desaparecido;
use App\Comentario;

class ControllerEdit extends Controller
{
    public function edit($id){
        $desaparecido = Desaparecido::find($id);
        return view('edit', compact('desaparecido', 'id'));
    }

    public function update(Request $request, $id)
    {
        $desaparecido = Desaparecido::find($id);
        $desaparecido->nome = $request->nome;
        $desaparecido->datanasc = $request->datanasc;
        $desaparecido->dataultimo = $request->dataultimo;
        $foto = $request->file('foto');
        $file_name = time() . '.png';
        $destination_path = './storage/images/';
        $foto->move($destination_path, $file_name);
        $desaparecido->foto = $file_name;
        $desaparecido->estadodes = $request->estadodes;
        $desaparecido->cidadedes = $request->cidadedes;
        $desaparecido->caracteristicasfis = $request->caracteristicasfis;
        $desaparecido->vestimenta = $request->vestimenta;
        $desaparecido->save();
        
        $desaparecido = Desaparecido::with('comentarios')->find($id);
        $coment = Comentario::with('user')->get();
        return view('page', ['desaparecido'=> $desaparecido, 'coment'=>$coment]);
    }
}
