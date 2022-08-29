<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UcesnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->firstName(),
            'umetnicko_ime' => $this->faker->unique()->userName(),
            'drzava' => $this->faker->country(),
            'godine' => $this->faker->numberBetween($min = 15, $max = 90),
        ];
    }
}
