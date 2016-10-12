<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// Per que una classe sigui migració afegim la classe Migration: igual al java
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Pàgina d'usuaris de l'aplciació web.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->unique(); //User token
            $table->string('name');
            $table->string('email')->unique(); //No és pot repetir
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //mètode estàtic per esborrar taules.
        Schema::drop('users');
    }
}
