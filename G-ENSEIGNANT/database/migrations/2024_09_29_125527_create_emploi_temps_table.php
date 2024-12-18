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
        Schema::create('emploi_temps', function (Blueprint $table) {
            $table->id();
            $table->String('email');
            $table->String('nom');
            $table->String('fichier');
            $table->date('debut');
            $table->date('fin');
            // $table->unsignedBigInteger('id_professeur');
            // $table->foreign('id_professeur')->references('id')->on('professeurs')->oneDelete('cascade');
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
        Schema::dropIfExists('emploi_temps');
    }
};
