@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>ADMIN</h1>
@stop

@section('content')
<a href="courses/create" class="btn btn-primary mb-3">Crear Curso</a>

<table id="courses" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th><!--tengo q traer el nombre de CONTENTS-->
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Cupos</th>
            <th scope="col">Instructor</th>
            <th scope="col">Precio</th><!--tengo q traer el nombre de CONTENTS-->
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{$course->id}}</td>

            <td><!--tengo q traer el nombre de mi tabla CONTENTS--></td>

            <td>{{$course->date}}</td>
            <td>{{$course->time}}</td>
            <td>{{$course->stock}}</td>
            <td><!--tengo q traer el Instructor de mi tabla TEACHERS--></td>
            <td><!--tengo q traer el Precio de mi tabla CONTENTS--></td>

            <td>
                <form action="{{ route ('courses.destroy',$course->id)}}" method="POST">
                <a href="/courses/{{ $course->id}}/edit" class="btn btn-info">Editar</a>
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
