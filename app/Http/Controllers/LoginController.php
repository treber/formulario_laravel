<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    
    public function show()
    {
        $email = $_POST['email'];
        //$datos = User::find($email);
        $datos = Login::where('email', $email)->get();
        //Si no está vacío la variable $datos
        if(!empty($datos))
        {
            return view('acces', compact('datos'));
        }else {
            return 'No se pudo conectar';
        }
        
    }
    
}
