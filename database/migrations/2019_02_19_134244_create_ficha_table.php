<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_matricula', 15)->nullable();
            $table->string('nombre_completo', 200)->nullable();
            $table->string('facultad', 200)->nullable();
            $table->string('escuela', 200)->nullable();
            $table->char('semestre', 2)->nullable();
            $table->char('segunda_carrera', 2)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->char('sexo', 2)->nullable();
            $table->char('dni', 8)->nullable();
            $table->integer('edad')->nullable();
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
        Schema::dropIfExists('ficha');
    }
}
