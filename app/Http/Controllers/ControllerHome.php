<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delegacia;

class ControllerHome extends Controller
{
    public function index()
    {
        $delegacias = Delegacia::all();
        return view('home')->with('delegacias', $delegacias);
    }
}
