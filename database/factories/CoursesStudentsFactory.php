<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
use App\Models\Students;
class CoursesStudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
   public function definition()
{
    $course = Courses::inRandomOrder()->first();
    $student = Students::inRandomOrder()->first();

    return [
        'course_id' => $course ? $course->id : Courses::factory()->create()->id,
        'student_id' => $student ? $student->id : Students::factory()->create()->id,
    ];
}
}