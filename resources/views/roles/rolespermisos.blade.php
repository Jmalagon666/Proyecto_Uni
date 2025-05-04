@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Permisos</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    {{$roles->name}}
  </div>
  <div class="card-body">
    <h5>Listo de Permisos</h5>
    {!! Form::model($roles, ['route'=>['roles.update',$roles],'method'=>'put']) !!}
        @foreach ($permisos as $permiso )
        <div>
            <label>
                {!! Form::checkbox('permisos[]', $permiso->id, $roles->hasPermissionTo($permiso->id) ? : false, ['class'=>'mr-1']) !!}
                {{ $permiso->name }}
            </label>
        </div>        
        @endforeach
        {!! Form::submit('Asignar Permisos', ['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
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