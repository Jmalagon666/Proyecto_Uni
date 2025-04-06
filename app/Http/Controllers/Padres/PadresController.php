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

}
