@extends('adminlte::page')

@section('title', 'Asistencia')

@section('content_header')
@stop

@section('content')
<br>
    <div class="container-xxl">
        <div class="row mb-4">
            <!-- Información del estudiante -->
            <div class="col-12">
                <div class="card" style="background-color: #007bff; color: white; border: none;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/foto_de_estudiante.png') }}" alt="Estudiante" class="img-fluid mr-3"
                            style="width: 150px; height: auto;">
                        <div style="color: black;">
                            <h1 class="mb-0" style="color: white;"><strong>MENSAJES</strong></h1>
                            <p class="mb-0"><strong>Estudiante:</strong> Andrés Lozano</p>
                            <p class="mb-0"><strong>Grado:</strong> 7mo</p>
                            <p class="mb-0"><strong>Institución:</strong> Los Amiguitos</p>
                            <p class="mb-0"><strong>Acudiente:</strong> Marta Lozano</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Asistencia del Mes</h4>
                    <h5 class="mb-0">P = Presente, A = Ausente</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Día</th>
                                    <th>Materia 1</th>
                                    <th>Materia 2</th>
                                    <th>Materia 3</th>
                                    <th>Materia 4</th>
                                    <th>Materia 5</th>
                                    <th>Materia 6</th>
                                    <th>Materia 7</th>
                                    <th>Materia 8</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($dia = 1; $dia <= 30; $dia++)
                                    <tr>
                                        <td>{{ $dia }}</td>
                                        @for ($materia = 1; $materia <= 8; $materia++)
                                            <td>
                                                {{-- Ejemplo: P = Presente, A = Ausente --}}
                                                {{-- Aquí puedes reemplazar por datos reales --}}
                                                <span class="badge badge-success">P</span>
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
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
            console.log("Hi, I'm using the Laravel-AdminLTE package!");
        </script>
    @stop
