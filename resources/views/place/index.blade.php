@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<a href="places/create" class="btn btn-primary mb-3">Crear Contenido</a>

<table id="place" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
      <tr>

          <th scope="col">ID</th>
          <th scope="col">Ciudad</th>
          <th scope="col">Direccion</th> 
          <th scope="col">Acciones</th>

      </tr>
  </thead>

  <tbody>
      @foreach ($places as $place)
      <tr>

          <td>{{$place->id}}</td>
          <td>{{$place->city}}</td>
          <td>{{$place->direction}}</td>

          <td>
              <form action="{{ route ('places.destroy',$place->id)}}" method="POST">
              <a href="/places/{{$place->id}}/edit" class="btn btn-info">Editar</a>
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