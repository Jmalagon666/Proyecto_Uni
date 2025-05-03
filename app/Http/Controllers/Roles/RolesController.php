<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Permissions;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();

        return view('roles.index', compact('roles'));
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
        
        $roles = new Roles();
        $roles->name = $request->input('name');
        $roles->guard_name = 'web';
        $roles->save();
    
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
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
        $roles = Roles::find($id);
        $permisos = Permissions::all();
        return view('roles.rolespermisos', compact('roles','permisos'));       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roles $role)
    {

        //$roles->syncPermissions($request->permisos);
  
        $role->permissions()->sync($request->permisos);
        return redirect()->route('roles.edit',$role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roles = Roles::findOrFail($id);
        $roles->delete();

        return redirect()->route('roles.index')->with('success', 'rol eliminado correctamente.');
    }
}
