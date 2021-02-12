@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Editar Curso</h1>
@stop

@section('content')
<form action="/courses/{{$course->id}}" method="POST">
  @csrf
  @method('PUT')

 <div class="mb-3">
       <label for="" class="form-label">Nombre</label>
       <input id="name" name="name" type="text" class="form-control" value="">
 </div>

 <div class="mb-3">
       <label for="" class="form-label">Fecha</label>
       <input id="date" name="date" type="date" class="form-control" value="{{$course->date}}">
 </div>
 <div class="mb-3">
       <label for="" class="form-label">Hora</label>
       <input id="time" name="time" type="time" class="form-control" value="{{$course->time}}">
 </div>

 <div class="mb-3">
        <label for="" class="form-label">Cupos</label>
        <input id="stock" name="stock" type="number" class="form-control" value="{{$course->stock}}">
 </div>

 <div class="mb-3">
   <label for="" class="form-label">Precio</label>
   <input id="" name="" type="number" step="any" class="form-control" value="">
 </div>
 <a href="/courses" class="btn btn-secondary">Cancelar</a>
 <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
