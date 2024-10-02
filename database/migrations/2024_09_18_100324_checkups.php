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
        Schema::create('checkups', function(Blueprint $table){
            $table->string('patient_id')->nullable(false);
            $table->string('nurse_id')->nullable(false);
            $table->date('date')->nullable(false);
            $table->string('diagnosis')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      // Disable foreign key checks to avoid issues
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('checkups');
       // Re-enable foreign key checks
      Schema::enableForeignKeyConstraints();
      
    }
};
