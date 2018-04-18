<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('razon_social');
            $table->string('nombre');
            $table->string('pais');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('correo');
            $table->boolean('activo');
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
        Schema::dropIfExists('empresarios');
    }
}
