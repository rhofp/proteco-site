<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('firstLastName');
            $table->string('secondLastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('account')->unique();
            $table->enum('newsletter', [1, 0]);
            $table->integer('usertype_id')->unsigned();
            $table->foreign('usertype_id')->references('id')->on('userstypes')->onDelete('cascade');
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
        Schema::drop('users');
    }
}
