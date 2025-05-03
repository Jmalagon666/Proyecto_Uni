@extends('adminlte::page')

@section('title', 'Dashboard')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@section('content_header')
    <h1>Permisos Admin</h1>
@stop

@section('content')
<div class="card mt-4">
    <div class="card-header">
        Gestión de Avisos
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarPermisoModal">Agregar
            Permiso</a>
        <table class="table table-striped">
            {{-- Setup data for datatables --}}
            @php
            $heads = [
            'ID',
            'Permiso',
            'Acciones'
            ];

            $btnDelete = '<button type="submit" class="btn btn-default text-danger mx-1 shadow" title="Delete">
                <i class="fa fa-lg fa-fw fa-trash"></i>
            </button>';

            $config = [
            'language' => [
            'url' => 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            ]
            ];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                {{-- Loop through the avisos and display them in the table --}}
                @foreach($permisos as $permiso)
                <tr>
                    <td>{{ $permiso->id }}</td>
                    <td>{{ $permiso->name }}</td>
                    <td>

                        <a href="#" class="btn btn-default text-primary mx-1 shadow" title="Edit" data-bs-toggle="modal"
                            data-bs-target="#editarRolModal-{{ $permiso->id }}">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>

                        <form action="{{ route('roles.destroy', $permiso->id) }}" method="POST" class="formEliminar"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            {!! $btnDelete !!}
                        </form>

                    </td>
                </tr>
                @endforeach
            </x-adminlte-datatable>


        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="agregarPermisoModal" tabindex="-1" aria-labelledby="agregarPermisoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017bfe">
                <h5 class="modal-title" id="agregarPermisoModalLabel">Agregar Permiso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('permisos.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Permiso</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del permiso" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Permiso</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop