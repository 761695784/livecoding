<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //on peut faire  le suivant
        // $this->call(UserSeeder::class);
        // $this->call(CategorieSeeder::class);
        // ou bien utiliser un tableau
        $this->call([
            UserSeeder::class,
            CategorieSeeder::class
        ]);
    }
}
