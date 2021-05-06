<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalestraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palestra', function (Blueprint $table) {
            $table->id();
            $table->string('Id_escola');
            $table->string('tema');
            $table->string('palestrante');
            $table->string('periodo');
            $table->string('cidade');
            $table->string('horas');
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
        Schema::dropIfExists('palestra');
    }
}
