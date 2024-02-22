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
        Schema::create('classes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name')->nullable();
            $table->string('level')->nullable();
            $table->string('sublevel')->nullable();
            $table->foreignUlid('guardian_id')->references('id')->on('users');
            $table->string('description')->nullable();
            $table->string('room_number')->nullable();
            $table->string('academic_year')->nullable();
            $table->string('capacity')->nullable();
            $table->string('current_enrollment')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
