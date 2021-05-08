<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalestrasTable extends Migration
{
    public function up()
    {
        Schema::create('palestras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('escola_id')->unsigned();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
            $table->string('tema');
            $table->string('palestrante');
            $table->string('periodo');
            $table->string('cidade');
            $table->string('horas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('palestras');
    }
}
