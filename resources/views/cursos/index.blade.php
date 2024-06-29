@extends('layouts.app')

@section('content')
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear Nuevo Curso</a>
    <ul>
        @foreach(['Curso 1', 'Curso 2', 'Curso 3'] as $curso)
            <li>{{ $curso }}</li>
        @endforeach
    </ul>
@endsection
