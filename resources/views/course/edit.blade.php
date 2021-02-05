@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/courses/{{$course->id}}" method="POST">    
  @csrf
  @method('PUT')
 <div class="mb-3">
   <label for="" class="form-label">Nombre</label>
   <input id="name" name="name" type="text" class="form-control" value="{{$course->name}}">    
 </div>
 <div class="mb-3">
   <label for="" class="form-label">Descripción</label>
   <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$course->descripcion}}">
 </div>
 <div class="mb-3">
   <label for="" class="form-label">Cantidad</label>
   <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$course->cantidad}}">
 </div>
 <div class="mb-3">
   <label for="" class="form-label">Precio</label>
   <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$course->precio}}">
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