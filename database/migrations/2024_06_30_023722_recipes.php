<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->integer('idrecipes')->autoIncrement();
            $table->text('ingredient');
            $table->string('name', 45);
            $table->text('description');
            $table->integer('inventories_idinventories');
            $table->primary(['idrecipes', 'inventories_idinventories']);

            $table->foreign('inventories_idinventories')
                ->references('idinventories')
                ->on('inventories')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}

