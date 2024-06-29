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
            $table->string('codigo')->unique();
            $table->unsignedBigInteger('escuela_profesional_id');
            $table->timestamps();

            $table->foreign('escuela_profesional_id')->references('id')->on('escuela_profesionales')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
