<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(AyamSeeder::class);
        $this->call(SayurSeeder::class);
    }
}
