<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorJuego;

class controladorVistas extends Controller
{
    public function inicio(){
        return view('Welcome');

    }

    public function viewRegistrarP(){
        return view('RegistrarP');

    }

    public function viewMostrarP(){
        return view('MostrarP');
        
    }

    public function confirmarGame(validadorJuego $req){
        return redirect('RegistrarP')->with('Exito','Datos Almacenados');
    }


}
