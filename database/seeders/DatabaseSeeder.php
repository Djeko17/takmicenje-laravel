<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $takmicenjeSeeder = new TakmicenjeSeeder();
        $ucesnikSeeder = new UcesnikSeeder();
        $pobednikSeeder = new PobednikSeeder();

        $takmicenjeSeeder->run();
        $ucesnikSeeder->run();
        $pobednikSeeder->run();
    }
}
