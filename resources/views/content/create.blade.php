@extends('adminlte::page')

@section('title', 'CREATE')

@section('content_header')
    <h1>CREATE</h1>
@stop

@section('content')

<form action="/contents" method="POST">
  @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name_content" name="name_content" type="text" class="form-control" tabindex="2">
    </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="description_content" name="description_content" type="text" class="form-control" tabindex="2">

  </div>
  
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="price" name="price" type="number" class="form-control" tabindex="2">
    </div>


  <a href="/courses" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
