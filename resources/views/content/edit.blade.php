@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
<form action="/contents/{{$content->id}}" method="POST">
  @csrf
  @method('PUT')

 <div class="mb-3">
       <label for="" class="form-label">Nombre</label>
       <input id="name_content" name="name_content" type="text" class="form-control" value="{{$content->name_content}}">
 </div>

 <div class="mb-3">
       <label for="" class="form-label">Descripcion</label>
       <input id="description_content" name="description_content" type="text" class="form-control" value="{{$content->description_content}}">
 </div>
 
 <div class="mb-3">
   <label for="" class="form-label">Precio</label>
   <input id="price" name="price" type="number" step="any" class="form-control" value="{{$content->price}}">
 </div>


 <a href="/contents" class="btn btn-secondary">Cancelar</a>
 <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop