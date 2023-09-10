<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence(4);
        $slug = Str::slug($title);

        return [
            'user_id' => rand(2,3),
            'title' => $title,
            'slug' =>  $slug,
            'short_text' => fake()->sentence(30),
            'body' => fake()->paragraph(),
            'photo' => 'articles/photo.jpg',
        ];
    }
}
