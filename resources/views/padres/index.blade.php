@extends('adminlte::page')

@section('title', 'Padres')

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

        <div class="row">
            <!-- Eventos -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Eventos</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <img src="{{ asset('img/calendario.png') }}" alt="Notificaciones" class="img-fluid mb-2"
                                style="width: auto; height: auto;">
                            <li><span class="text-primary">●</span> Fecha actual</li>
                            <li><span class="text-warning">●</span> Reunión de padres</li>
                            <li><span class="text-danger">●</span> Entrega de informes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Opciones principales -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>Opciones Principales</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <a href="{{ route('padres.mensajes') }}"
                                    class="btn btn-light btn-block d-flex flex-column align-items-center justify-content-center h-100"
                                    style="height: 120px;">
                                    <img src="{{ asset('img/icono_de_mensajes.png') }}" alt="Mensajes"
                                        class="img-fluid mb-2">
                                    <p class="mb-0">Mensajes</p>
                                </a>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="{{ route('padres.asistencia') }}"
                                    class="btn btn-light btn-block d-flex flex-column align-items-center justify-content-center h-100"
                                    style="height: 120px;">
                                    <img src="{{ asset('img/icono_de_consulta_asistencia.png') }}"
                                        alt="Consultar Asistencia" class="img-fluid mb-2">
                                    <p class="mb-0">Consultar Asistencia</p>
                                </a>
                            </div>

                            <div class="col-md-12 mb-3">
                                <a href="{{ route('padres.calificaciones') }}"
                                    class="btn btn-light btn-block d-flex flex-column align-items-center justify-content-center h-100"
                                    style="height: 120px;">
                                    <img src="{{ asset('img/calificaciones_de_los_estudiantes.png') }}"
                                        alt="Consultar Notas" class="img-fluid mb-2">
                                    <p class="mb-0">Consultar Notas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notificaciones -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5>
                            <img src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones" class="img-fluid mb-2"
                                style="width: 50px; height: auto;">
                            Notificaciones
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info mb-2 d-flex align-items-center" role="alert">
                            <img src="{{ asset('img/notificaciones.png') }}" alt="Reunión" style="width: 24px; height: 24px;" class="mr-2">
                            <span>
                                <strong>Reunión de Padres de Familia:</strong> La próxima reunión será el viernes 24 de mayo a las 7:00 p.m.
                            </span>
                        </div>
                        <div class="alert alert-success mb-0 d-flex align-items-center" role="alert">
                            <img src="{{ asset('img/notificaciones.png') }}" alt="Notas" style="width: 24px; height: 24px;" class="mr-2">
                            <span>
                                <strong>Notas Actualizadas:</strong> Todas las calificaciones han sido subidas a la plataforma.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <style>
        .btn-light {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
        }

        .btn-light img {
            max-width: 50px;
            margin-bottom: 10px;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Vista de Padres cargada correctamente.");
    </script>
@stop
