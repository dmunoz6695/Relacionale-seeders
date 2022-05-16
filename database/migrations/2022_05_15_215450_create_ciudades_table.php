<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 55);
            $table->string('descripcion', 55);
            $table->boolean('activo')->default(true);
            $table->bigInteger('barrio_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('barrio_id')->references('id')->on('barrios');
            $table->unique(['nombre','activo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
