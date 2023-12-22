<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('students_id');
            $table->timestamps();
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');

            $table->unique(['courses_id', 'students_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
}
