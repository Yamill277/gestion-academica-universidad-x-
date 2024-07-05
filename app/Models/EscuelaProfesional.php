<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscuelaProfesional extends Model
{
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'escuela_profesional_id');
    }
}

