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
        Schema::create('professions_of_artisan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artisan_id')->constrained('artisans');
            $table->foreignId('profession_id')->constrained('professions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professions_of_artisan');

    }
};
