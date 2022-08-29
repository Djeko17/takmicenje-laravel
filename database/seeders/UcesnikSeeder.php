<?php

namespace Database\Seeders;

use App\Models\Ucesnik;
use Illuminate\Database\Seeder;

class UcesnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ucesnik::factory()->count(50)->create();
    }
}
