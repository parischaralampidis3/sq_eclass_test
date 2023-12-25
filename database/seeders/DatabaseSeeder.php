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
         * When the database is seeded, population data is generated. In order to disturb data population,
         * I provide the methods above that disturb from populating the database with data each time. Just because data are produced for test purposes every time
         * the database is seeded as the previous data are deleted and they are replaced with new ones.
         */

        Courses::query()->delete();
        Students::query()->delete();

        /**
         * Data can be defined with the length of the records that will take apart at the database.
         */

        $students = Students::factory(20)->create();
        $courses = Courses::factory(5)->create();

        foreach ($courses as $course) {
            // Enrolled Students Logic
            $enrolledStudents = $students->where('enrollment', 'Y')->shuffle();
              
            $studentPercentage = 0.6;
            $numberOfStudents = $enrolledStudents->count();
            $numberOfStudentsToAttach = (int)round($numberOfStudents * $studentPercentage);
            $course->students()->attach($enrolledStudents->take($numberOfStudentsToAttach));

            // 50% Enrollment Logic$
            $completedEnrolledStudents = $students->where('completion','Y','enrollment','Y');
            $enrollmentPercentage = 0.5;
            $numberOfEnrolledStudents = $completedEnrolledStudents->count();
            $numberOfEnrolledStudentsToAttach = (int)round($numberOfEnrolledStudents * $enrollmentPercentage);
            $course->students()->attach($completedEnrolledStudents->take($numberOfEnrolledStudentsToAttach));
        }
    }
}
