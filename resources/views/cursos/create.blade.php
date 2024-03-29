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
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        
        @error('name')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <label >Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <label>Categoria: 
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar Formulario</button>

    </form>
@endsection
