@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios y Roles</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <p>{{ $user->name }}</p>
  </div>
  <div class="card-body">
    <h5>Listo de Permisos</h5>
    {!! Form::model($user, ['route'=>['asignar.update',$user],'method'=>'put']) !!}
        @foreach ($roles as $role )
        <div>
            <label>
                {!! Form::checkbox('roles[]', $role->id, $user->hasAnyRole($role->id)? : false, ['class'=>'mr-1']) !!}
                {{ $role->name }}
            </label>
        </div>        
        @endforeach
        {!! Form::submit('Asignar Roles', ['class'=>'btn btn-success']) !!}
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