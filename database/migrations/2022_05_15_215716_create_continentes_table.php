<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContinentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 55);
            $table->string('descripcion', 55);
            $table->boolean('active')->default(true);
            $table->bigInteger('pais_id')->unsigned()->nullable();

            $table->timestamps();
            $table->foreign('pais_id')->references('id')->on('paises');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('continentes');
    }
}
