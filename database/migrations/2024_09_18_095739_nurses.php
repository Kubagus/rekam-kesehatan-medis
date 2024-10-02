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
        Schema::create('nurses', function(Blueprint $table){
            $table->id();
            $table->string('department');
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

         Schema::dropIfExists('nurses');
         Schema::enableForeignKeyConstraints();
    }
};
