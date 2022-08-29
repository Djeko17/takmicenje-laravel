<?php

namespace Database\Seeders;

use App\Models\Pobednik;
use Illuminate\Database\Seeder;

class PobednikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pobednik::factory()->count(120)->create();
    }
}
