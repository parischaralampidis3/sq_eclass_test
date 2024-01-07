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

     /**
      * Define enrollemnt and completion parameter as an array, and giving the option for random set at the database
      */
    public function definition()
    {  
             $enrollment =  $this->faker->randomElement(['Y', 'N']);
            $completion = ($enrollment === 'N') ? 'N' : $this->faker->randomElement(['Y', 'N']);
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'completion' => $completion,
            'enrollment'=> $enrollment
        ];
    }
}
