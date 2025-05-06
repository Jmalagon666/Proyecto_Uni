@extends('adminlte::page')

@section('title', 'Coordinador')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@section('content_header')
    <h1>Coordinador</h1>
@stop

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Gestión de Estudientes
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal"
                data-bs-target="#agregarEstudientesModal">Agregar Estudiante</a>
            <a href="{{ route('coordinador.generarpdf') }}" target="_blank" class="btn btn-danger mb-3">
                <i class="fas fa-file-pdf"></i> Descargar PDF
            </a>
            <a href="{{ route('coordinador.exportarExcel') }}" class="btn btn-success mb-3">
                <i class="fas fa-file-excel"></i> Descargar Excel
            </a>
            <a href="{{ route('coordinador.exportarCSV') }}" class="btn btn-primary mb-3">
                <i class="fas fa-file-csv"></i> Descargar CSV
            </a>
            <table class="table table-striped">
                {{-- Setup data for datatables --}}
                @php
                    $heads = [
                        'ID',
                        'Nombre',
                        'Apellido',
                        'Grado',
                        'Edad',
                        'Nombre Acudiente ',
                        'Apellido Acudiente  ',
                        'Telefono Acudiente  ',
                        'Estado',
                        'Acciones',
                    ];

                    $btnDelete = '<button type="submit" class="btn btn-default text-danger mx-1 shadow" title="Delete">
              <i class="fa fa-lg fa-fw fa-trash"></i>
          </button>';

                    $config = [
                        'language' => [
                            'url' => 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json',
                        ],
                    ];
                @endphp

                {{-- Minimal example / fill data using the component slot --}}
                <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                    {{-- Loop through the avisos and display them in the table --}}
                    @foreach ($estudientes as $estudiente)
                        <tr>
                            <td>{{ $estudiente->id }}</td>
                            <td>{{ $estudiente->nombre }}</td>
                            <td>{{ $estudiente->apellido }}</td>
                            <td>{{ $estudiente->grado }}</td>
                            <td>{{ $estudiente->edad }}</td>
                            <td>{{ $estudiente->nombre_acudiente }}</td>
                            <td>{{ $estudiente->apellido_acudiente }}</td>
                            <td>{{ $estudiente->telefono_acudiente }}</td>
                            <td>{{ $estudiente->estado }}</td>
                            <td>
                                <button class="btn btn-default text-primary mx-1 shadow" title="Edit"
                                    data-bs-toggle="modal" data-bs-target="#editarEstudianteModal"
                                    data-id="{{ $estudiente->id }}" data-nombre="{{ $estudiente->nombre }}"
                                    data-apellido="{{ $estudiente->apellido }}" data-grado="{{ $estudiente->grado }}"
                                    data-edad="{{ $estudiente->edad }}"
                                    data-nombre_acudiente="{{ $estudiente->nombre_acudiente }}"
                                    data-apellido_acudiente="{{ $estudiente->apellido_acudiente }}"
                                    data-telefono_acudiente="{{ $estudiente->telefono_acudiente }}"
                                    data-estado="{{ $estudiente->estado }}">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>

                                <form action="{{ route('coordinador.destroy', $estudiente->id) }}" method="POST"
                                    class="formEliminar" style="display:inline;">
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

    <!-- Modal para Agregar Estudiante -->
    <div class="modal fade" id="agregarEstudientesModal" tabindex="-1" aria-labelledby="agregarEstudientesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #017bfe;">
                    <h5 class="modal-title" id="agregarEstudientesModalLabel">Agregar Nuevo Estudiante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('coordinador.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Ingrese el nombre del estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido"
                                placeholder="Ingrese el apellido del estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="grado" class="form-label">Grado</label>
                            <input type="text" class="form-control" id="grado" name="grado"
                                placeholder="Ingrese el grado del estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad"
                                placeholder="Ingrese la edad del estudiante" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_acudiente" class="form-label">Nombre del Acudiente</label>
                            <input type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente"
                                placeholder="Ingrese el nombre del acudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido_acudiente" class="form-label">Apellido del Acudiente</label>
                            <input type="text" class="form-control" id="apellido_acudiente" name="apellido_acudiente"
                                placeholder="Ingrese el apellido del acudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono_acudiente" class="form-label">Teléfono del Acudiente</label>
                            <input type="text" class="form-control" id="telefono_acudiente" name="telefono_acudiente"
                                placeholder="Ingrese el teléfono del acudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-control" id="estado" name="estado" required>
                                <option value="">Seleccione Opcion</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar Estudiante</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para Editar Estudiante -->
    <div class="modal fade" id="editarEstudianteModal" tabindex="-1" aria-labelledby="editarEstudianteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #017bfe;">
                    <h5 class="modal-title" id="editarEstudianteModalLabel">Editar Estudiante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editarEstudianteForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editar_nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="editar_nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="editar_apellido" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_grado" class="form-label">Grado</label>
                            <input type="text" class="form-control" id="editar_grado" name="grado" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="editar_edad" name="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_nombre_acudiente" class="form-label">Nombre del Acudiente</label>
                            <input type="text" class="form-control" id="editar_nombre_acudiente"
                                name="nombre_acudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_apellido_acudiente" class="form-label">Apellido del Acudiente</label>
                            <input type="text" class="form-control" id="editar_apellido_acudiente"
                                name="apellido_acudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_telefono_acudiente" class="form-label">Teléfono del Acudiente</label>
                            <input type="text" class="form-control" id="editar_telefono_acudiente"
                                name="telefono_acudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="editar_estado" class="form-label">Estado</label>
                            <select class="form-control" id="editar_estado" name="estado" required>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Actualizar Estudiante</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            Gestión de Usuarios
        </div>
        <div class="card-body">
            <h5 class="card-title">Lista de Usuarios</h5>
            <p class="card-text">Administra los usuarios de la aplicación desde aquí.</p>

            <!-- Botón para crear un nuevo usuario -->
            <a href="#" class="btn btn-success mb-3">Crear Usuario</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Área</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan</td>
                        <td>Pérez</td>
                        <td>juan.perez@example.com</td>
                        <td>juanp</td>
                        <td>Administrador</td>
                        <td>Recursos Humanos</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>María</td>
                        <td>Gómez</td>
                        <td>maria.gomez@example.com</td>
                        <td>mariag</td>
                        <td>Coordinador</td>
                        <td>Finanzas</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Carlos</td>
                        <td>Ramírez</td>
                        <td>carlos.ramirez@example.com</td>
                        <td>carlosr</td>
                        <td>Profesor</td>
                        <td>Educación</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Lucía</td>
                        <td>Fernández</td>
                        <td>lucia.fernandez@example.com</td>
                        <td>luciaf</td>
                        <td>Administrador</td>
                        <td>TI</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Pedro</td>
                        <td>Martínez</td>
                        <td>pedro.martinez@example.com</td>
                        <td>pedrom</td>
                        <td>Coordinador</td>
                        <td>Logística</td>
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
        <div class="card mt-4">
            <div class="card-header">
                Gestión de Estudiantes Registrados
            </div>
            <div class="card-body">
                <h5 class="card-title">Lista de Estudiantes Registrados</h5>
                <p class="card-text">Administra los estudiantes registrados en el sistema desde aquí.</p>

                <!-- Botón para agregar un nuevo estudiante -->
                <a href="#" class="btn btn-success mb-3">Agregar Estudiante</a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Grado</th>
                            <th>Edad</th>
                            <th>Nombre del Acudiente</th>
                            <th>Apellido del Acudiente</th>
                            <th>Teléfono del Acudiente</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>5°</td>
                            <td>10</td>
                            <td>María</td>
                            <td>Gómez</td>
                            <td>555-1234</td>
                            <td>Activo</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Lucía</td>
                            <td>Fernández</td>
                            <td>6°</td>
                            <td>11</td>
                            <td>Carlos</td>
                            <td>Ramírez</td>
                            <td>555-5678</td>
                            <td>Activo</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Pedro</td>
                            <td>Martínez</td>
                            <td>4°</td>
                            <td>9</td>
                            <td>Laura</td>
                            <td>García</td>
                            <td>555-9012</td>
                            <td>Activo</td>
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



        <div class="card-header">
            Gestión de Colegios
        </div>
        <div class="card-body">
            <h5 class="card-title">Lista de Colegios</h5>
            <p class="card-text">Administra los colegios registrados en la aplicación desde aquí.</p>

            <!-- Botón para agregar un nuevo colegio -->
            <a href="#" class="btn btn-success mb-3">Agregar Colegio</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre del Colegio</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Colegio Nacional</td>
                        <td>Calle Principal 123</td>
                        <td>555-1234</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Colegio Moderno</td>
                        <td>Avenida Secundaria 456</td>
                        <td>555-5678</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Colegio Internacional</td>
                        <td>Calle Tercera 789</td>
                        <td>555-9012</td>
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
            Gestión de Notas
        </div>
        <div class="card-body">
            <h5 class="card-title">Lista de Notas por Estudiante</h5>
            <p class="card-text">Administra las notas de los estudiantes en las diferentes materias desde aquí.</p>

            <!-- Botón para agregar notas -->
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
                    <tr>
                        <td>María Gómez</td>
                        <td>88 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>85 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>90 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>92 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>87 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>84 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>89 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>91 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Carlos Ramírez</td>
                        <td>75 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>80 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>85 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>78 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>82 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>88 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>90 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>84 <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Gestión de Estudiantes Registrados
        </div>
        <div class="card-body">
            <h5 class="card-title">Lista de Estudiantes Registrados</h5>
            <p class="card-text">Administra los estudiantes registrados en el sistema desde aquí.</p>

            <!-- Botón para agregar un nuevo estudiante -->
            <a href="#" class="btn btn-success mb-3">Agregar Estudiante</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Grado</th>
                        <th>Edad</th>
                        <th>Nombre del Acudiente</th>
                        <th>Apellido del Acudiente</th>
                        <th>Teléfono del Acudiente</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan</td>
                        <td>Pérez</td>
                        <td>5°</td>
                        <td>10</td>
                        <td>María</td>
                        <td>Gómez</td>
                        <td>555-1234</td>
                        <td>Activo</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Lucía</td>
                        <td>Fernández</td>
                        <td>6°</td>
                        <td>11</td>
                        <td>Carlos</td>
                        <td>Ramírez</td>
                        <td>555-5678</td>
                        <td>Activo</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Pedro</td>
                        <td>Martínez</td>
                        <td>4°</td>
                        <td>9</td>
                        <td>Laura</td>
                        <td>García</td>
                        <td>555-9012</td>
                        <td>Activo</td>
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
            Gestión de Asistencia - Marzo
        </div>
        <div class="card-body">
            <h5 class="card-title">Calendario de Asistencia - Marzo</h5>
            <p class="card-text">Administra la asistencia de los estudiantes en el mes de marzo.</p>

            <!-- Botón para registrar asistencia -->
            <a href="#" class="btn btn-success mb-3">Registrar Asistencia</a>

            <table class="table table-bordered text-center table-sm">
                <thead>
                    <tr>
                        <th class="align-middle" style="width: 150px;">Estudiante</th>
                        @php
                            $daysInMarch = 31;
                            $weekDays = ['Lun', 'Mar', 'Mié', 'Jue', 'Vie'];
                        @endphp
                        @for ($day = 1; $day <= $daysInMarch; $day++)
                            <th class="align-middle" style="width: 30px;">
                                {{ $day }}<br>
                                {{ $weekDays[($day - 1) % 5] }}
                            </th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        @for ($day = 1; $day <= $daysInMarch; $day++)
                            <td style="width: 30px;">
                                {!! $day % 2 == 0 ? '✔️' : '❌' !!}
                                <a href="#" class="text-warning ml-1"><i class="fas fa-edit"></i></a>
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>María Gómez</td>
                        @for ($day = 1; $day <= $daysInMarch; $day++)
                            <td style="width: 30px;">
                                {!! $day % 3 == 0 ? '✔️' : '❌' !!}
                                <a href="#" class="text-warning ml-1"><i class="fas fa-edit"></i></a>
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Carlos Ramírez</td>
                        @for ($day = 1; $day <= $daysInMarch; $day++)
                            <td style="width: 30px;">
                                {!! $day % 4 == 0 ? '✔️' : '❌' !!}
                                <a href="#" class="text-warning ml-1"><i class="fas fa-edit"></i></a>
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Lucía Fernández</td>
                        @for ($day = 1; $day <= $daysInMarch; $day++)
                            <td style="width: 30px;">
                                {!! $day % 5 == 0 ? '✔️' : '❌' !!}
                                <a href="#" class="text-warning ml-1"><i class="fas fa-edit"></i></a>
                            </td>
                        @endfor
                    </tr>
                    <tr>
                        <td>Pedro Martínez</td>
                        @for ($day = 1; $day <= $daysInMarch; $day++)
                            <td style="width: 30px;">
                                {!! $day % 2 != 0 ? '✔️' : '❌' !!}
                                <a href="#" class="text-warning ml-1"><i class="fas fa-edit"></i></a>
                            </td>
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

            <!-- Botón para agregar un nuevo aviso -->
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
                    <tr>
                        <td>Aviso 2</td>
                        <td>Este es el segundo aviso de prueba.</td>
                        <td>2025-04-02</td>
                        <td>María Gómez</td>
                        <td>Coordinador</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Modificar</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Aviso 3</td>
                        <td>Este es el tercer aviso de prueba.</td>
                        <td>2025-04-03</td>
                        <td>Carlos Ramírez</td>
                        <td>Profesor</td>
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


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    <script>
        @if (session('success'))
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
    <script>
        const editarEstudianteModal = document.getElementById('editarEstudianteModal');
        editarEstudianteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            // Obtén los datos del estudiante desde los atributos del botón
            const id = button.getAttribute('data-id');
            const nombre = button.getAttribute('data-nombre');
            const apellido = button.getAttribute('data-apellido');
            const grado = button.getAttribute('data-grado');
            const edad = button.getAttribute('data-edad');
            const nombre_acudiente = button.getAttribute('data-nombre_acudiente');
            const apellido_acudiente = button.getAttribute('data-apellido_acudiente');
            const telefono_acudiente = button.getAttribute('data-telefono_acudiente');
            const estado = button.getAttribute('data-estado');

            // Asigna los valores a los campos del formulario
            const form = document.getElementById('editarEstudianteForm');
            form.action = `/coordinador/update/${id}`; // Ruta para actualizar el estudiante

            document.getElementById('editar_nombre').value = nombre;
            document.getElementById('editar_apellido').value = apellido;
            document.getElementById('editar_grado').value = grado;
            document.getElementById('editar_edad').value = edad;
            document.getElementById('editar_nombre_acudiente').value = nombre_acudiente;
            document.getElementById('editar_apellido_acudiente').value = apellido_acudiente;
            document.getElementById('editar_telefono_acudiente').value = telefono_acudiente;
            document.getElementById('editar_estado').value = estado;
        });
    </script>
@stop
