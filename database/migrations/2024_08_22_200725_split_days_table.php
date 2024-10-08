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
        Schema::create('split_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('split_id')->constrained('splits')->onDelete('cascade');
            $table->integer('day_order');
            $table->boolean('isRestDay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('split_days');
    }
};
