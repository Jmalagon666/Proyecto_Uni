@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="card mt-4">
    <div class="card-header">
        Editar Aviso
    </div>
    <div class="card-body">
        <form action="{{ route('profesor.update', $aviso) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $aviso->titulo }}" required>
            </div>
            <div class="mb-3">
                <label for="fecha_publicacion" class="form-label">Fecha de Publicacion</label>
                <input type="text" class="form-control" id="fecha_publicacion" name="fecha_publicacion"
                    value="{{ $aviso->fecha_publicacion }}" readonly>
            </div>
            <div class="mb-3">
                <label for="creador" class="form-label">Creador</label>
                <input type="text" class="form-control" id="creador" name="creador" value="{{ $aviso->creador }}"
                readonly>
            </div>
            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type="text" class="form-control" id="rol" name="rol" value="{{ $aviso->rol }}" readonly>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                    required>{{ $aviso->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Aviso</button>
        </form>
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