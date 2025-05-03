@extends('adminlte::page')

@section('title', 'Profesor')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@section('content_header')
<h1>Profesor</h1>
@stop

@section('content')
<div class="card mt-4">
    <div class="card-header">
        Gestión de Avisos
    </div>
    <div class="card-body">
        <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarAvisoModal">Agregar
            Aviso</a>
        <table class="table table-striped">
            {{-- Setup data for datatables --}}
            @php
            $heads = [
            'ID',
            'Título',
            'Descripción',
            'Fecha de Publicación',
            'Creado por',
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
                @foreach($avisos as $aviso)
                <tr>
                    <td>{{ $aviso->id }}</td>
                    <td>{{ $aviso->titulo }}</td>
                    <td>{{ $aviso->descripcion }}</td>
                    <td>{{ $aviso->fecha_publicacion }}</td>
                    <td>{{ $aviso->creador }}</td>
                    <td>{{ $aviso->rol }}</td>
                    <td>
                        <a href="{{route('profesor.edit', $aviso)}}"
                            class="btn btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>

                        <form action="{{ route('profesor.destroy', $aviso->id) }}" method="POST" class="formEliminar"
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

<div class="card mt-4">
    <div class="card-header">
        Gestión de Notas
    </div>
    <div class="card-body">
        <h5 class="card-title">Lista de Notas por Estudiante</h5>
        <p class="card-text">Administra las notas de los estudiantes en las diferentes materias desde aquí.</p>
        <a href="#" class="btn btn-success mb-3">Agregar Notas</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Materia 1</th>
                    <th>Materia 2</th>
                    <th>Materia 3</th>
                    <th>Materia 4</th>
                    <th>Materia 5</th>
                    <th>Materia 6</th>
                    <th>Materia 7</th>
                    <th>Materia 8</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>85 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>90 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>78 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>88 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>92 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>80 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>87 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>89 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        Gestión de Asistencia
    </div>
    <div class="card-body">
        <h5 class="card-title">Calendario de Asistencia</h5>
        <p class="card-text">Administra la asistencia de los estudiantes desde aquí.</p>
        <a href="#" class="btn btn-success mb-3">Registrar Asistencia</a>
        <table class="table table-bordered text-center table-sm">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    @php
                    $daysInMarch = 31;
                    $weekDays = ['Lun', 'Mar', 'Mié', 'Jue', 'Vie'];
                    @endphp
                    @for ($day = 1; $day <= $daysInMarch; $day++) <th>{{ $day }}<br>{{ $weekDays[($day - 1) % 5] }}</th>
                        @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    @for ($day = 1; $day <= $daysInMarch; $day++) <td>{!! $day % 2 == 0 ? '✔️' : '❌' !!} <a href="#"
                            class="text-warning"><i class="fas fa-edit"></i></a></td>
                        @endfor
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        Gestión de Avisos
    </div>
    <div class="card-body">
        <h5 class="card-title">Lista de Avisos</h5>
        <p class="card-text">Administra los avisos publicados en la aplicación desde aquí.</p>
        <a href="#" class="btn btn-success mb-3">Agregar Aviso</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha de Publicación</th>
                    <th>Creado por</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Aviso 1</td>
                    <td>Este es el primer aviso de prueba.</td>
                    <td>2025-04-01</td>
                    <td>Juan Pérez</td>
                    <td>Administrador</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="agregarAvisoModal" tabindex="-1" aria-labelledby="agregarAvisoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017bfe">
                <h5 class="modal-title" id="agregarAvisoModalLabel">Agregar Rol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profesor.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <input type="text" class="form-control" id="rol" name="rol" value="{{$rol_nombre}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="creador" class="form-label">Creado por</label>
                        <input type="text" class="form-control" id="creador" name="creador" value="{{$usuario}}" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Rol</button>
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