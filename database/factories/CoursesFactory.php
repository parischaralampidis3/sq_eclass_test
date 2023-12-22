<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Students;

class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'student_id' => Students::factory(),
            'student_id' =>Students::factory(),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
