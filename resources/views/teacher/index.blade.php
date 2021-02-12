@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Instructores</h1>
@stop

@section('content')
<a href="teachers/create" class="btn btn-primary mb-3">Crear Instructor</a>

<table id="teachers" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre del Instructor</th>
            <th scope="col">Acerca de... </th>
            
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
            
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name_teacher}}</td>
            <td>{{$teacher->about}}</td>

            <td>
                <form action="{{ route ('teachers.destroy',$teacher->id)}}" method="POST">
                <a href="/teachers/{{ $teacher->id}}/edit" class="btn btn-info">Editar</a>
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
