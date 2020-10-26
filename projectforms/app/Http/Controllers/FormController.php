<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //  ******Formularios******
    public function mostrarForm(){
        return view('contactos');
    }
}
