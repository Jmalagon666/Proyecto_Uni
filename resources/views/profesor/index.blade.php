@extends('adminlte::page')

@section('title', 'Profesor')

@section('content_header')
    <h1>Profesor</h1>
@stop

@section('content')

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
          @for ($day = 1; $day <= $daysInMarch; $day++)
            <th>{{ $day }}<br>{{ $weekDays[($day - 1) % 5] }}</th>
          @endfor
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          @for ($day = 1; $day <= $daysInMarch; $day++)
            <td>{!! $day % 2 == 0 ? '✔️' : '❌' !!} <a href="#" class="text-warning"><i class="fas fa-edit"></i></a></td>
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
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop