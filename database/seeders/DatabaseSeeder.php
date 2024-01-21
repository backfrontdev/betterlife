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
         \App\Models\User::factory()->create([
             'name' => 'Ekaterina',
             'email' => 'e.starceva@betterlife.ru',
             'password' => '123456',
             'role' => 'admin'
         ]);
    }
}
