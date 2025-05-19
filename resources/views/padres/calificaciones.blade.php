@extends('adminlte::page')

@section('title', 'Asistencia')

@section('content_header')
@stop

@section('content')
    <br>
    <div class="container-xxl">
        <div class="row mb-4">

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
                <div class="card-header text-white" style="background-color: #007bff;">
                    <h4 class="mb-0">Calificaciones por Materia</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Materia</th>
                                    <th>Calificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Materia 1</td>
                                    <td>4.5</td>
                                </tr>
                                <tr>
                                    <td>Materia 2</td>
                                    <td>4.2</td>
                                </tr>
                                <tr>
                                    <td>Materia 3</td>
                                    <td>4.8</td>
                                </tr>
                                <tr>
                                    <td>Materia 4</td>
                                    <td>4.0</td>
                                </tr>
                                <tr>
                                    <td>Materia 5</td>
                                    <td>4.9</td>
                                </tr>
                                <tr>
                                    <td>Materia 6</td>
                                    <td>4.7</td>
                                </tr>
                                <tr>
                                    <td>Materia 7</td>
                                    <td>4.1</td>
                                </tr>
                                <tr>
                                    <td>Materia 8</td>
                                    <td>4.6</td>
                                </tr>
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
