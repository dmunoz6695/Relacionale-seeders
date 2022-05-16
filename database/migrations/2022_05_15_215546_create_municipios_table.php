<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 55);
            $table->string('descripcion', 55);
            $table->boolean('activo')->default(true);
            $table->bigInteger('ciudad_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
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
        Schema::dropIfExists('municipios');
    }
}
