<?php

namespace Database\Seeders;

use App\Models\Takmicenje;
use Illuminate\Database\Seeder;

class TakmicenjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Takmicenje::factory()->count(25)->create();
    }
}
