<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('codigo');
            $table->string('nombre');
            $table->enum('state',['ACTIVE','DELETE'])->default('ACTIVE');


            $table->integer('facultad_id')->unsigned();
            $table->foreign('facultad_id')->references('id')->on('facultads');
           


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
        Schema::dropIfExists('escuelas');
    }
};
