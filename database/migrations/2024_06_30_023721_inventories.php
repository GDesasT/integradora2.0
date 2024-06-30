<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->integer('idinventories')->primary();
            $table->string('name', 45);
            $table->integer('amount');
            $table->enum('type', ['Verdura', 'Fruta', 'Proteina', 'Cereales y Legumbres'])->default('Verdura');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
