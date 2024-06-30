<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('idSales')->autoIncrement();
            $table->dateTime('date');
            $table->double('total', 10, 2);
            $table->integer('customers_idcustomers');
            $table->integer('dishes_idProducts');
            $table->integer('dishes_recipes_idrecipes');
            $table->integer('dishes_recipes_inventories_idinventories');
            $table->primary(['idSales', 'customers_idcustomers', 'dishes_idProducts', 'dishes_recipes_idrecipes', 'dishes_recipes_inventories_idinventories']);

            $table->foreign('customers_idcustomers')
                ->references('idcustomers')
                ->on('customers')
                ->onDelete('cascade');

            $table->foreign(['dishes_idProducts', 'dishes_recipes_idrecipes', 'dishes_recipes_inventories_idinventories'])
                ->references(['idProducts', 'recipes_idrecipes', 'recipes_inventories_idinventories'])
                ->on('dishes')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}

