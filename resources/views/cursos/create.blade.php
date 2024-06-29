@extends('layouts.app')

@section('content')
<h1>Crear Curso</h1>

<form action="{{ route('cursos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">

    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo">

    <label for="escuela_profesional_id">Escuela Profesional:</label>
    <select id="escuela_profesional_id" name="escuela_profesional_id">
        @foreach($escuelas as $escuela)
            <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Crear Curso</button>
</form>
@endsection
