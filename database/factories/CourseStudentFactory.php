<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
use App\Models\Students;

class CourseStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
/**
 * This extra layer of CoursesStudent factory enables producing dummy data based at the eloquent relationship 
 * many to many between the tables.
 */
    public function definition()
    {
        return [
            'courses_id' => Courses::factory(),
            'students_id' => Students::factory()
        ];
    }
}
