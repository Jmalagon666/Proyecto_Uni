@extends('adminlte::page')

@section('title', 'Chat')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                        <img src="{{ asset('img/docente.png') }}" alt="Docente"
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
</div>
@stop