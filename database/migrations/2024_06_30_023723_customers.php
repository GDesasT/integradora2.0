<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('idcustomers')->autoIncrement();
            $table->string('name', 45);
            $table->integer('workerid');
            $table->string('lastname', 45);
            $table->integer('Enterprices_idEnterprices');
            $table->primary(['idcustomers', 'Enterprices_idEnterprices']);

            $table->foreign('Enterprices_idEnterprices')
                ->references('idEnterprices')
                ->on('enterprices')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}


