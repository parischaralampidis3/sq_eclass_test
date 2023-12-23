<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    
     /**
     *The factory accepts an associative array, with model
     values. So parameters for data generating can be defined 
     inside the array.
     *
     */
     public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'difficulty' => $this->faker->randomElement(['Easy', 'Medium','Hard'])
        ];
    }
}
