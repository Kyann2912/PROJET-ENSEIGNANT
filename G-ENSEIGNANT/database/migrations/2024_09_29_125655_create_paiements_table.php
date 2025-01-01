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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->String('filiere_niveau');
            $table->String('cours');
            $table->String('nbre_heures');
            $table->decimal('montant_heure');
            $table->decimal('montant_total');
            $table->unsignedBigInteger('id_professeur');
            $table->foreign('id_professeur')->references('id')->on('professeurs')->onDelete('cascade');
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
        Schema::dropIfExists('paiements');
    }
};
