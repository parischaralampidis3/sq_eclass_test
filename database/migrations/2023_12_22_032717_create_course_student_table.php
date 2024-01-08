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

     /**
      * Course_student_table works as a pivot table.A pivot table is an intermediate table 
      *that connects the two independent tables using their foreign keys.Model relationships
      * for Students and Courses
      * have defined as many to many. This table defines id for students and courses, in order to 
      * enable association between the two tables.
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
