<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

		User::truncate();
		Post::truncate();
		Category::truncate();

		$user1 = User::factory()->create();
		$user2 = User::factory()->create();

		$personal = Category::create([
			'name' => 'Personal',
			'slug' => 'personal',
		]);

		$family = Category::create([
			'name' => 'Family',
			'slug' => 'family',
		]);

		Post::create([
			'user_id' => $user1->id,
			'category_id' => $personal->id,
			'title' => 'My post',
			'slug' => 'my-second-post',
			'excerpt' => 'sadsasjdfhasbfkdjhb',
			'body' => 'bodybodybodybodybodybodybodybodybodybody'
		]);

		Post::create([
			'user_id' => $user1->id,
			'category_id' => $family->id,
			'title' => 'My post',
			'slug' => 'my-first-post',
			'excerpt' => 'sadsasjdfhasbfkdjhb',
			'body' => 'bodybodybodybodybodybodybodybodybodybody'
		]);

	}
}
