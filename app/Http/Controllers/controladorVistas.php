<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
