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
        // \App\Models\User::factory(10)->create();
        \App\Models\Company::factory()->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Media::factory(10)->create();
    }
}
