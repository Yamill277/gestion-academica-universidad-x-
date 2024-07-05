<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function escuelaProfesional()
    {
        return $this->belongsTo(EscuelaProfesional::class, 'escuela_profesional_id');
    }
}