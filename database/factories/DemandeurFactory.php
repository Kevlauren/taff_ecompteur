<?php

namespace Database\Factories;

use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'nom' => $faker->name,
            'prenom' => $faker->name,
            'email' =>$faker->unique()->safeEmail,
            'contact' => $faker->phoneNumber,
            'localite' => $faker->address,
            'longitude' => $faker->longitude,
            'latitude' => $faker->latitude
        ];
    }
}
