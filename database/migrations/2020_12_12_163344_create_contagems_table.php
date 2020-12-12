<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contagems', function (Blueprint $table) {
            $table->id();
            $table->boolean('resultado');
            $table->double('tempoFinal');
            $table->double('tempoRestante');
            $table->unsignedBigInteger('contato_id');
            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('contagems');
    }
}
