<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('idUser')->autoIncrement();
            $table->string('email', 45);
            $table->string('password', 45);
            $table->string('name', 45);
            $table->integer('Roles_idRoles');
            $table->primary(['idUser', 'Roles_idRoles']);

            $table->foreign('Roles_idRoles')
                ->references('idRoles')
                ->on('roles')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

