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
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <label >Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <label>Categoria: 
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria )}}">
        </label>

        @error('categoria')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar Curso</button>

    </form>
@endsection