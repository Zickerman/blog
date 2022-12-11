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
			'body' => 'bodybodybodybodybodybodybodybodybodybody',
			'published_at' => '2022-12-04 10:33:13'
		]);

		Post::create([
			'user_id' => $user1->id,
			'category_id' => $family->id,
			'title' => 'My post',
			'slug' => 'my-first-post',
			'excerpt' => 'sadsasjdfhasbfkdjhb',
			'body' => 'bodybodybodybodybodybodybodybodybodybody',
			'published_at' => '2022-12-04 10:33:13'
		]);
		Post::create([
			'user_id' => $user1->id,
			'category_id' => $family->id,
			'title' => 'My post',
			'slug' => 'my-third-post',
			'excerpt' => 'sadsasjdfhasbfkdjhb',
			'body' => 'bodybodybodybodybodybodybodybodybodybody',
			'published_at' => '2022-12-04 10:33:13'
		]);
		Post::create([
			'user_id' => $user1->id,
			'category_id' => $family->id,
			'title' => 'My post',
			'slug' => 'my-fourth-post',
			'excerpt' => 'exc 444',
			'body' => 'bodybodybodybodybodybodybodybodybodybody',
			'published_at' => '2022-12-04 10:33:13'
		]);
		Post::create([
			'user_id' => $user2->id,
			'category_id' => $personal->id,
			'title' => '111 post',
			'slug' => 'my-111-post',
			'excerpt' => 'some exc field of mine',
			'body' => 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'published_at' => '2022-12-04 10:33:13'
		]);
		Post::create([
			'user_id' => $user2->id,
			'category_id' => $personal->id,
			'title' => '222 post',
			'slug' => 'my-222-post',
			'excerpt' => 'some exc',
			'body' => 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'published_at' => '2022-12-04 10:33:13'
		]);

	}
}
