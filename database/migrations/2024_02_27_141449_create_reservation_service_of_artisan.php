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
        Schema::create('reservation_service_of_artisan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services_of_artisans')->CascadeOnDelete();
            $table->foreignId('reservation_id')->constrained('reservations')->CascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_of_reservation');
    }
};
