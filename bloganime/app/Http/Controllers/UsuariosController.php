<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function punlic()
    {
        $usuarios = \DB::table('users')->select('id','name','email')->get();
        return view('usuarios.index', compact('usuarios'));
    }
}
