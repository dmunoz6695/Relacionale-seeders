<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 55);
            $table->string('descripcion', 55);
            $table->boolean('activo')->default(true);
            $table->bigInteger('municipio_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('municipio_id')->references('id')->on('municipios');
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
        Schema::dropIfExists('departamentos');
    }
}
