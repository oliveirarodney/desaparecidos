<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Desaparecido;

class ControllerRegister extends Controller
{
    public function showregister(){
        return view('register');
    }

    public function salvarFoto() {
        $input = Input::file('foto');
        $destinationPath = '/uploads/';
        $filename = $input->getClientOriginalName(); 
        $input->move($destinationPath,$fileName);
        return $filename;
    }

    public function store(Request $request){      
        $usuario = Auth::user();
        $desaparecido = new Desaparecido;
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
        $desaparecido->usuario_id = $usuario->id;
        $desaparecido->save();
        
        $message = "Cadastro efetuado com sucesso!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        return redirect()->route('pesquisar');
    }
}
