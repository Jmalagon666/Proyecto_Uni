@extends('adminlte::page')

@section('title', 'Padres')

@section('content_header')
    <h1>Padres</h1>
@stop

@section('content')

<div class="card mt-4">
  <div class="card-header">
    Asistencia de Estudiantes
  </div>
  <div class="card-body">
    <h5 class="card-title">Calendario de Asistencia</h5>
    <p class="card-text">Visualiza la asistencia de los estudiantes desde aquí.</p>
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
            <td>{!! $day % 2 == 0 ? '✔️' : '❌' !!}</td>
          @endfor
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="card mt-4">
  <div class="card-header">
    Notas de Estudiantes
  </div>
  <div class="card-body">
    <h5 class="card-title">Lista de Notas por Estudiante</h5>
    <p class="card-text">Visualiza las notas de los estudiantes en las diferentes materias desde aquí.</p>
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
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          <td>85</td>
          <td>90</td>
          <td>78</td>
          <td>88</td>
          <td>92</td>
          <td>80</td>
          <td>87</td>
          <td>89</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="card mt-4">
  <div class="card-header">
    Avisos
  </div>
  <div class="card-body">
    <h5 class="card-title">Lista de Avisos</h5>
    <p class="card-text">Visualiza los avisos publicados en la aplicación desde aquí.</p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Título</th>
          <th>Descripción</th>
          <th>Fecha de Publicación</th>
          <th>Creado por</th>
          <th>Rol</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Aviso 1</td>
          <td>Este es el primer aviso de prueba.</td>
          <td>2025-04-01</td>
          <td>Juan Pérez</td>
          <td>Administrador</td>
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop