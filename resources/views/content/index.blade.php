@extends('adminlte::page')

@section('title', 'CREATE')

@section('content_header')
    <h1>ADMIN</h1>
@stop

@section('content')
<a href="contents/create" class="btn btn-primary mb-3">Crear Contenido</a>

<table id="content" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
      <tr>

          <th scope="col">ID</th>
          <th scope="col">Nombre Curso</th>
          <th scope="col">Descripcion</th> 
          <th scope="col">Precio</th><!--tengo q traer el nombre de CONTENTS-->
          <th scope="col">Acciones</th>

      </tr>
  </thead>

  <tbody>
      @foreach ($contents as $content)
      <tr>

          <td>{{$content->id}}</td>
          <td>{{$content->name_content}}</td>
          <td>{{$content->description_content}}</td>
          <td>{{$content->price}}</td>

          <td>
              <form action="{{ route ('contents.destroy',$content->id)}}" method="POST">
              <a href="/contents/{{ $content->id}}/edit" class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop