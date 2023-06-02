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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medcin_id')->constrained('medcins');
            $table->foreignId('patient_id')->constrained('patients');
            $table->date('date');
            $table->string('diagnostic');
            $table->string('prescription');
            $table->string('description');
            $table->enum('status', ['Donne', 'Pennding'])->default('Donne');
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
        Schema::dropIfExists('consultations');
    }
};
