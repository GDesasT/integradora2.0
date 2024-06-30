<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterpricesTable extends Migration
{
    public function up()
    {
        Schema::create('enterprices', function (Blueprint $table) {
            $table->integer('idEnterprices')->autoIncrement();
            $table->string('name', 45);
            $table->text('address');
            $table->primary('idEnterprices');
        });
    }

    public function down()
    {
        Schema::dropIfExists('enterprices');
    }
}


