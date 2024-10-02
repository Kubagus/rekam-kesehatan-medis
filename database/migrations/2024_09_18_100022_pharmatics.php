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
        Schema::create('pharmatics', function(Blueprint $table){
            $table->id();
            $table->string('department');
            $table->integer('license_number')->nullable(false);
            $table->integer('user_id')->nullable(false);
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
        Schema::dropIfExists('pharmatics');
         // Re-enable foreign key checks
        Schema::enableForeignKeyConstraints();
    }
};
