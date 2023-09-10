<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->word;
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
        ];
    }
}
