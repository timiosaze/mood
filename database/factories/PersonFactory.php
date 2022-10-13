<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => fake()->name(),
            'age' => fake()->numberBetween($min = 22, $max = 54),
            'gender' => fake()->randomElement($array = array ('male','female')),
            'address' => fake()->address(),
            'salary' => fake()->randomFloat($nbMaxDecimals = 2, $min = 1500, $max = 5001),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
