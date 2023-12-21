<?php

namespace Database\Seeders;
use App\Models\Courses;
use App\Models\Students;
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
        Courses::truncate();
        Students::truncate();

    
        Courses::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        Students::factory(10)->create();
    }
}
