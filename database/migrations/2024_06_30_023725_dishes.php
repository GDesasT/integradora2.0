<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->integer('idProducts')->autoIncrement();
            $table->string('name', 45);
            $table->enum('weekday', ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'])->default('Lunes');
            $table->text('description');
            $table->double('price', 10, 2);
            $table->integer('recipes_idrecipes');
            $table->integer('recipes_inventories_idinventories');
            $table->integer('feedbacks_idfeedbacks');
            $table->primary(['idProducts', 'recipes_idrecipes', 'recipes_inventories_idinventories', 'feedbacks_idfeedbacks']);

            $table->foreign(['recipes_idrecipes', 'recipes_inventories_idinventories'])
                ->references(['idrecipes', 'inventories_idinventories'])
                ->on('recipes')
                ->onDelete('cascade');

            $table->foreign('feedbacks_idfeedbacks')
                ->references('idfeedbacks')
                ->on('feedbacks')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}

