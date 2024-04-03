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
        Schema::create('booked_vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('vehicle_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('message');
            $table->integer('status');
            $table->integer('visiting_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_vehicles');
    }
};
