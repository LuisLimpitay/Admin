@extends('adminlte::page')

@section('title', 'CREATE')

@section('content_header')
    <h1>CREATE</h1>
@stop

@section('content')

<form action="/courses" method="POST">
  @csrf

  <div class="mb-3">
    
    <label for="teacher_id" class="form-label">Nombre del Curso</label>
    <select name="teacher_id" id="">
      
      @foreach( $contents as $content => $value )
        <option value="{{ $content }}">{{ $value }}</option>
      @endforeach

    </select>

  </div>

  <div class="mb-3">
    
    <label for="teacher_id" class="form-group">Precio</label>
    <!--ES ACA DONDE SERIA UNA ESPECIE DE SELECT DINAMICO QUE AL SELECCIONAR
    EL NOMBRE DE MI TABLA CONTENT ME TRAIGA TODA LA TUPLA-->
    <input id="date" name="date" type="text" class="form-control" tabindex="2">


  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="date" name="date" type="date" class="form-control" tabindex="2">

  </div>

  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="time" name="time" type="time" class="form-control" tabindex="2">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cupos</label>
    <input id="stock" name="stock" type="number" class="form-control" tabindex="2">
  </div>

  <div class="mb-3">
    
      <label for="teacher_id" class="form-group">Instructor</label>
      <select name="teacher_id" id="">
        
        @foreach( $teachers as $teacher => $value )
          <option value="{{ $teacher}}">{{ $value }}</option>
        @endforeach

      </select>

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
