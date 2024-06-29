@extends('layouts.app')

@section('content')
<h1>Editar Curso</h1>

<form action="{{ route('cursos.update', $curso->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $curso->nombre }}">

    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" value="{{ $curso->codigo }}">

    <label for="escuela_profesional_id">Escuela Profesional:</label>
    <select id="escuela_profesional_id" name="escuela_profesional_id">
        @foreach($escuelas as $escuela)
            <option value="{{ $escuela->id }}" {{ $curso->escuela_profesional_id == $escuela->id ? 'selected' : '' }}>{{ $escuela->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Actualizar Curso</button>
</form>
@endsection
