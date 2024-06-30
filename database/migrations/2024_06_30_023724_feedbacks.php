<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->integer('idfeedbacks')->autoIncrement();
            $table->longText('coment');
            $table->primary('idfeedbacks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}

