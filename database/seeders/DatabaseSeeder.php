<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
//        User::truncate();
//        Author::truncate();
//        Post::truncate();


        User::factory()->create();
        Author::factory(2)->create();
        Post::factory(40)->create();


    }
}
