<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_name');
            $table->string('description');
            $table->timestamps();
        });

        /*
        $table->insert(
            array(
                'department_name' => 'Creative Technology',
                'description' => 'team of web developers and programmers'
            ),
            array(
                'department_name' => 'Creative Design',
                'description' => 'team of web designers and artist'
            ),
            array(
                'department_name' => 'Business Development',
                'description' => 'client relationship managers'
            ),
            array(
                'department_name' => 'Social Media',
                'description' => 'team of social media analyst'
            ),
            array(
                'department_name' => 'Sprklr',
                'description' => 'team of data analyst'
            )
        );
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departments');
    }
}
