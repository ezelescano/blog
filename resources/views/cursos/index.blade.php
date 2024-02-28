@extends('layouts.plantilla')

@section('title', 'Index')


@section('content')
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <h1>Bienvenidos a la lista de cursos</h1>
    <ul>
        @foreach ( $cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>    
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection