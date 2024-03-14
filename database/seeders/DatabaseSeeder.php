<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory()->count(4)->create();
        \App\Models\Thread::factory()->count(10)->create();
        \App\Models\Topic::factory()->count(20)->create();
        \App\Models\Reply::factory()->count(50)->create();
    }

}
