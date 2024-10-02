<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('medical_records', function(Blueprint $table){
            $table->string('patient_id')->nullable(false);
            $table->string('doctor_id')->nullable(false);
            $table->date('date')->nullable(false);
            $table->string('diagnosis')->nullable(false);
            $table->string('treatment')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('medical_records');
    }
};
