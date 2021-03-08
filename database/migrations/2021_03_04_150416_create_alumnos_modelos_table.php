<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('lugar_nacimiento');
            $table->string('dhd');
            $table->integer('edad');
            $table->string('talla');
            $table->string('peso');
            $table->string('zapato');
            $table->string('od');
            $table->string('sexo');
            $table->date('nacimiento');
            $table->string('grado');
            $table->string('seccion');
            $table->string('turno');
            $table->string('pdoi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos_modelos');
    }
}
