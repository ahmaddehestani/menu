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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('parent_id')->nullable()->constrained('menu_items')->nullOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->unsignedTinyInteger('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
