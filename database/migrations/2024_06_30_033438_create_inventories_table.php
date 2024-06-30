<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipes_id')->constrained('recipes','id')->onDelete('cascade');
            $table->foreignId('dishes_id')->constrained('dishes','id')->onDelete('cascade');
            $table->string('name', 45);
            $table->integer('amount');
            $table->enum('type', ['Verdura', 'Fruta', 'Proteína', 'Cereales y Legumbres'])->default('Verdura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};