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
    {       $enrollment =  $this->faker->randomElement(['Y', 'N']);
            $completion = ($enrollment === 'N') ? 'N' : $this->faker->randomElement(['Y', 'N']);
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'completion' => $completion,
            'enrollment'=> $enrollment
        ];
    }
}
