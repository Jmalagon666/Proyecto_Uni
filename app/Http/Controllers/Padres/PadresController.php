<?php

namespace App\Http\Controllers\Padres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadresController extends Controller
{
    public function index()
    {
        return view('Padres.index');
    }

    public function vista_asistencia()
    {
        return view('Padres.asistencia');
    }

    public function vista_calificaciones()
    {
        return view('Padres.calificaciones');
    }

}
