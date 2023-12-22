<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'completion' => $this->faker->randomElement(['Y', 'N']),
            'enrollment' => $this->faker->randomElement(['Y', 'N']),
        ];
    }
}
