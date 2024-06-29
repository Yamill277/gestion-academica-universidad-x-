<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\EscuelaProfesional;

class CursoController extends Controller
{
    // Mostrar lista de cursos
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    // Mostrar formulario para crear un nuevo curso
    public function create()
    {
        $escuelas = EscuelaProfesional::all();
        return view('cursos.create', compact('escuelas'));
    }

    // Guardar un nuevo curso
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
            'escuela_profesional_id' => 'required|integer|exists:escuelas_profesionales,id',
        ]);

        Curso::create($validatedData);

        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente.');
    }

    // Mostrar un curso específico
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    // Mostrar formulario para editar un curso
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        $escuelas = EscuelaProfesional::all();
        return view('cursos.edit', compact('curso', 'escuelas'));
    }

    // Actualizar un curso específico
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
            'escuela_profesional_id' => 'required|integer|exists:escuelas_profesionales,id',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($validatedData);

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente.');
    }

    // Eliminar un curso específico
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente.');
    }
}
