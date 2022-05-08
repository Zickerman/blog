<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $authorId = array_rand(array_flip(Author::pluck('id')->toArray()), 1);
        return [
            'author_id' => $authorId,
            'text' => $this->faker->text(),
        ];
    }
}
