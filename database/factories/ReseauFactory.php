<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReseauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'localite' => $this->faker->city
        ];
    }
}
