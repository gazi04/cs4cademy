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
        Schema::create('avatar_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->enum('type', ['hat', 'shirt', 'gear', 'background']);
            $table->unsignedBigInteger('cost')->default(100);
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::create('user_inventory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('avatar_item_id')->constrained();
            $table->timestamps();

            $table->unique(['user_id', 'avatar_item_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar_items');
        Schema::dropIfExists('user_inventory');
    }
};
