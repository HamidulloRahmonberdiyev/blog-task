<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $tags = Tag::factory()->count(5)->create();

        $articles = Article::factory()
            ->count(20)
            ->hasAttached($tags)
            ->create();

    }
}
