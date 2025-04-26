@extends('adminlte::page')

@section('title', 'Mensajes')

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
                <img src="{{ asset('img/icono_de_mensajes.png') }}" alt="Estudiante" class="img-fluid mr-3"
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
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-header text-center">
                    <h5>Eventos</h5>
                </div>
                <div class="card-body">
                    <p><strong>Abril 2025</strong></p>
                    <ul class="list-unstyled">
                        <li><span class="text-primary">●</span> Fecha actual</li>
                        <li><span class="text-warning">●</span> Reunión de padres</li>
                        <li><span class="text-danger">●</span> Entrega de informes</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Chats -->
        <div class="col-lg-6 col-md-8 mb-4">
            <div class="card h-100">
                <div class="card-header text-center">
                    <h5>Chats</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center p-3 chat-item" style="border: 1px solid #ddd; border-radius: 5px; cursor: pointer;" onclick="toggleChat()">
                        <img src="{{ asset('img/docente.png') }}" alt="Docente"
                            class="img-fluid rounded-circle mr-3" style="width: 50px; height: 50px;">
                        <div>
                            <h6 class="mb-0"><strong>Sandra Castro | Docente - Matemáticas</strong></h6>
                            <p class="mb-0 text-muted">Buen día, señora Marcela. Debido a las faltas...</p>
                        </div>
                        <span class="badge badge-primary ml-auto" style="font-size: 14px;">1</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificaciones -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-header text-center">
                    <h5>Notificaciones</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nueva Actualización</strong></p>
                    <p>Revise el deportado de asistencia para ver de qué se trata.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenedor del mensaje completo -->
    <div id="chatContent" class="mt-3" style="display: none;">
        <div class="card">
            <div class="card-header text-center">
                <h5>Sandra Castro | Docente - Matemáticas</h5>
            </div>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <img src="{{ asset('img/docente.png') }}" alt="Docente"
                        class="img-fluid rounded-circle mr-3" style="width: 50px; height: 50px;">
                    <div class="bg-light p-3 rounded" style="width: 100%;">
                        <p class="mb-0"><strong>Buen día, soy la acudiente de Lozano. Me gustaría saber cómo proceder para mejorar su rendimiento en la materia. Gracias.</strong></p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="bg-light p-3 rounded ml-auto" style="width: 100%;">
                        <p class="mb-0">Buen día, señora Marcela. Debido a las faltas que ha tenido en el primer avance donde se han realizado talleres, lo más recomendable es reforzar los temas ya vistos, para ponerse al día y sobre todo contar con su acompañamiento en su proceso educativo.</p>
                    </div>
                    <img src="{{ asset('img/foto_de_estudiante.png') }}" alt="Docente"
                        class="img-fluid rounded-circle ml-3" style="width: 50px; height: 50px;">
                </div>
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary"><i class="fas fa-plus"></i></button>
                    </div>
                    <input type="text" class="form-control" placeholder="Escribe un mensaje...">
                    <div class="input-group-append">
                        <button class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
.card-header {
    background-color: #f8f9fa;
    font-weight: bold;
}

.badge-primary {
    background-color: #007bff;
    color: white;
}
</style>
@stop

@section('js')
<script>
    function toggleChat() {
        const chatContent = document.getElementById('chatContent');
        if (chatContent.style.display === 'none' || chatContent.style.display === '') {
            chatContent.style.display = 'block';
        } else {
            chatContent.style.display = 'none';
        }
    }
</script>
@stop