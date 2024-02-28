@extends('layouts.plantilla')

@section('title', 'Editar Curso')


@section('content')
    <h1>Bienvenido al formulario de edicion de curso</h1>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
    <br>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')
        
        <label >Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label >Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>Categoria: 
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar Curso</button>

    </form>
@endsection