<?php

namespace Database\Factories;

use App\Models\Pobednik;
use App\Models\Ucesnik;
use Illuminate\Database\Eloquent\Factories\Factory;

class PobednikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'takmicenje_id' => $this->faker->numberBetween($min = 1, $max = 25),
            'ucesnik_id'  => $this->faker->numberBetween($min = 1, $max = 50),
        ];
    }
}
