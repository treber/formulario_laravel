<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DeniedController extends Controller
{
    public function index()
    {
    	return view('acces-denied');
    }
}
