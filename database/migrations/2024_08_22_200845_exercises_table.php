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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->foreignId('MuscularGroup_id')->constrained('muscular_subgroups')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('videoURL')->nullable();
            $table->string('image', 50)->nullable();
            $table->foreignId('Accessory_id')->nullable()->constrained('accessories')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
