<?php

namespace Database\Seeders;
use App\Models\Courses;
use App\Models\Students;
use App\Models\CoursesStudents;
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
        Courses::query()->delete();
       Students::query()->delete();
       CoursesStudents::query()->delete();

       
        $courses=Courses::factory(10)->create();
        $students =Students::factory(10)->create();
        CoursesStudents::factory(10)->create();
      

        foreach($courses as $course){
        $studentPercentage = 0.6;
        $numberOfStudents = $students->count();
        $numberOfStudentsToAttach = (int)round($numberOfStudents*$studentPercentage);
        
            $course->students()->attach($students->random($numberOfStudentsToAttach)->pluck('id'));
        }
    }
}
