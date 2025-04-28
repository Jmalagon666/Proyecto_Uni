<?php

namespace App\Http\Controllers\Profesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aviso;

class ProfesorController extends Controller
{
    public function index()
    {
        $avisos = $avisos = Aviso::all();
        // dd($avisos);
        return view('profesor.index', compact('avisos'));
    }

    public function destroy($id)
    {
        // Eliminar un aviso
        $aviso = Aviso::findOrFail($id);
        $aviso->delete();

        return redirect()->route('profesor.index')->with('success', 'Aviso eliminado correctamente.');
    }
    public function edit($id)
    {
        // Editar un aviso
        $aviso = Aviso::findOrFail($id);
        echo "<script>console.log(" . json_encode($aviso) . ");</script>";
        return view('profesor.edit', compact('aviso'));
    }
    public function update(Request $request, $id)
    {
        // Actualizar un aviso
        $aviso = Aviso::findOrFail($id);
        $aviso->titulo = $request->input('titulo');
        $aviso->descripcion = $request->input('descripcion');
        $aviso->fecha_publicacion = $request->input('fecha_publicacion');
        $aviso->rol = $request->input('rol');
        $aviso->creador = $request->input('creador');
        $aviso->save();

        return redirect()->route('profesor.index')->with('success', 'Aviso actualizado correctamente.');
    }

}
