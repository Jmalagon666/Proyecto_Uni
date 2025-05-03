@extends('adminlte::page')

@section('title', 'Dashboard')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@section('content_header')
<h1>Rol Admin</h1>
@stop

@section('content')
<div class="card mt-4">
    <div class="card-header">
        Gestión de Avisos
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarRolModal">Agregar
            Rol</a>
        <table class="table table-striped">
            {{-- Setup data for datatables --}}
            @php
            $heads = [
            'ID',
            'Rol',
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
                @foreach($roles as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->name }}</td>
                    <td>

                        <a href="{{ route('roles.edit', $rol) }}" class="btn btn-default text-primary mx-1 shadow" title="Edit" >
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>

                        <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" class="formEliminar"
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


@foreach($roles as $rol)
<!-- Modal -->
<div class="modal fade" id="editarRolModal-{{ $rol->id }}" tabindex="-1"
    aria-labelledby="editarRolModalLabel-{{ $rol->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017bfe">
                <h5 class="modal-title" id="editarRolModalLabel-{{ $rol->id }}">Editar Rol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('roles.update', $rol->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name-{{ $rol->id }}" class="form-label">Nombre del Rol</label>
                        <input type="text" class="form-control" id="name-{{ $rol->id }}" name="name"
                            value="{{ $rol->name }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
@if(session('success'))
Swal.fire({
    title: '¡Éxito!',
    text: "{{ session('success') }}",
    icon: 'success',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'Aceptar'
});
@endif
$(document).ready(function() {
    $('.formEliminar').submit(function(e) {
        e.preventDefault();
        var form = this;
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    });
});
</script>
@stop