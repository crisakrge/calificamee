<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DBC')->create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('email');
            $table->string('password');
            $table->char('pin', 6);
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
        Schema::dropIfExists('users');
    }
}
