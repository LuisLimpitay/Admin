<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;
use App\Models\Place;
use App\Models\Teacher;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Content::factory(3)->create();
        Teacher::factory(2)->create();
        Place::factory(3)->create();
        Course::factory(5)->create();
    }
}
