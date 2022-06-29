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
        Schema::create('fiche_muts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("patient_id")->nullable();
            $table->foreign('patient_id')->references('id')->on('secretaires')->onDelete('cascade');

            $table->unsignedBigInteger("medecin_id")->nullable();
            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade');


            $table->string('nom_pat');
            $table->string('prenom_pat');
            $table->string('nom_med');
            $table->string('prenom_med');
            $table->string('date_soins');
            $table->string('code_mut');
            $table->string('montant_total');
            $table->string('montant_mut');
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
        Schema::dropIfExists('fiche_muts');
    }
};
