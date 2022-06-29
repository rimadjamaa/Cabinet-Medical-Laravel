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
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("consultation_id")->nullable();
            $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade')->nullable();


            $table->string('nom_pat');
            $table->string('prenom_pat');
            $table->string('nom_med');
            $table->string('prenom_med');
            $table->date('date');
            $table->string('description');
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
        Schema::dropIfExists('ordonnances');
    }
};
