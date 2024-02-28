@extends('layouts.plantilla')

@section('title', 'Curso Create')


@section('content')
    <h1>Bienvenido al formulario de creacion de curso</h1>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
    <br>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label >Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label >Descripcion: 
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        <label>Categoria: 
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>

    </form>
@endsection
