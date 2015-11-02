<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('department_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->timestamps();

            /*
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
                */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
