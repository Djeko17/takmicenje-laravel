<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TakmicenjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'drzava' => $this->faker->country(),
            'naziv' => $this->faker->streetName(),
            'godina' => $this->faker->numberBetween($min = 1950, $max = 2022),
            'instagram' => $this->faker->userName(),
        ];
    }
}
