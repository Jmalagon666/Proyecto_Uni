@extends('adminlte::page')

@section('title', 'Coordinador')

@section('content_header')
    <h1>Coordinador</h1>
@stop

@section('content')
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop