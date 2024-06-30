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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('invenroties_id')->constrained('inventories','id')->onDelete('cascade');
            $table->foreignId('dishes_id')->constrained()->onDelete('cascade');
            $table->text('ingredient');
            $table->string('name', 45);
            $table->text('description');
            $table->foreignId('inventory_id')->constrained('inventories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
