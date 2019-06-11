<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PerfilController extends Controller
{
    public function index()
    {
        $perfiles = \App\Perfil::all();
    
        return view('perfil.index', compact('perfiles'));
    }

    public function destroy($id)
    {
        Perfil::findOrFail($id)->delete();

        return redirect(route('perfiles.index'));
    }
}
