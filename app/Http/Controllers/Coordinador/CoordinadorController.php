<?php

namespace App\Http\Controllers\Coordinador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiantes;

class CoordinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudientes = Estudiantes::all();
        return view('coordinador.index', compact('estudientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // echo "<script>console.log(" . json_encode($request->all()) . ");</script>";
        // dd($request->all());

        // $request->validate([
        //     'nombre' => 'required|string|max:255',
        //     'apellido' => 'required|string|max:255',
        //     'email' => 'required|email|unique:estudiantes,email',
        //     'telefono' => 'required|string|max:15',
        // ]);

        // Crear un nuevo estudiante
        $estudiante = new Estudiantes();
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->grado = $request->input('grado'); // Corregido
        $estudiante->edad = $request->input('edad'); // Corregido
        $estudiante->nombre_acudiente = $request->input('nombre_acudiente'); // Corregido
        $estudiante->apellido_acudiente = $request->input('apellido_acudiente'); // Corregido
        $estudiante->telefono_acudiente = $request->input('telefono_acudiente'); // Corregido
        $estudiante->estado = $request->input('estado'); // Corregido
        $estudiante->save();
        return redirect()->route('coordinador.index')->with('success', 'Estudientes creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // echo "<script>console.log(" . json_encode($id) . ");</script>";
        // dd('id : '.$id);

        $estudiante = Estudiantes::findOrFail($id);
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->grado = $request->input('grado');
        $estudiante->edad = $request->input('edad');
        $estudiante->nombre_acudiente = $request->input('nombre_acudiente');
        $estudiante->apellido_acudiente = $request->input('apellido_acudiente');
        $estudiante->telefono_acudiente = $request->input('telefono_acudiente');
        $estudiante->estado = $request->input('estado');
        $estudiante->save();

       // dd(route('coordinador.index'));

        return redirect()->route('coordinador.index')->with('success', 'Estudiante actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudientes = Estudiantes::findOrFail($id);
        $estudientes->delete();

        return redirect()->route('coordinador.index')->with('success', 'Estudientes eliminado correctamente.');
    }
}
