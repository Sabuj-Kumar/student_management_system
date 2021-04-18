<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registrations', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('Student_name');
            $table->integer('Student_ID');
            $table->string('Semester');
            $table->string('Email_ID');
            $table->string('Department_Name');
            $table->string('Course1');
            $table->string('Course2');
            $table->string('Course3');
            $table->string('Course4');
            $table->string('Course5');

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
        Schema::dropIfExists('course_registrations');
    }
}
