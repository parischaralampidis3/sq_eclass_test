<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Students;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * When database is seeded, population data is generating. In order to disturb data population
         *  i provide the methods above that disturbing from populating the database with data each time.  Just because data are produced for test purposes everytime 
         * the database is seed as the previous data are deleted and they are replaced with new ones.
         */

        Courses::query()->delete();
        Students::query()->delete();

        /** 
         *  Data can be defined with the length of the records that will take apart, at
         * the database 
         */


        $students = Students::factory(10)->create();
        $courses = Courses::factory(5)->create();

        /**
         * The task requires 60% of student to be enrolled randomly at the courses. I set a loop  to defined the parameters to achieve the result.
         * I need a variable to define a value for student percentage, and a method that counts the number of existing students at the database.
         * When this variables are available, i can set a method that parses the number of students to an intege and round the integer result.
         * When this number of students is set
         * I can execute a combine of methods to execute the logic. At first i retrieve a many to many relationship between students and courses($course->students()).
         * Then the students that are already retrieved from the students model, they become attached randomly to the course, using random() method 
         */
        foreach ($courses as $course) {
            $studentPercentage = 0.6;
            $numberOfStudents = $students->count();
            $numberOfStudentsToAttach = (int) round($numberOfStudents * $studentPercentage);
            $course->students()->attach($students->random($numberOfStudentsToAttach));
        }


    }
}
