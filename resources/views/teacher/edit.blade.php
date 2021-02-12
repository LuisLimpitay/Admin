@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Editar Instructores</h1>
@stop

@section('content')

<form action="/teachers/{{$teacher->id}}" method="POST">    
  @csrf
  @method('PUT')

 <div class="mb-3">
   <label for="" class="form-label">Nombre del Instructor</label>
   <input id="name_teacher" name="name_teacher" type="text" class="form-control" value="{{$teacher->name_teacher}}">    
 </div>

 <div class="mb-3">
   <label for="" class="form-label">Trayectoria</label>
   <input id="about" name="about" type="text" class="form-control" value="{{$teacher->about}}">
 </div>

 <a href="/teachers" class="btn btn-secondary">Cancelar</a>
 <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop