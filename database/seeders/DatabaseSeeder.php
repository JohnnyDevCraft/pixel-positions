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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Johnathon Smith',
            'email' => 'jd49490@me.com',
            'password' => 'Snafu201'
        ]);

        $this->call(JobSeeder::class);
    }
}
