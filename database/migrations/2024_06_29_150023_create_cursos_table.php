<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
{
    Schema::create('cursos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('codigo');
        $table->foreignId('escuela_profesional_id')->constrained('escuela_profesionales');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
