<?php

use App\Models\Pizza;
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
        \App\Models\User::factory(10)->create(); // Crea 10 usuarios
        Pizza::factory(20)->create(); // Crea 20 pizzas con datos aleatorios
    }
}
