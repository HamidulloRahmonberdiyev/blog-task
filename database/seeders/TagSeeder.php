<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        Tag::create([
            'name' => 'Interesting',
            'slug' => 'interesting'
        ]);

        Tag::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Tag::create([
            'name' => 'World News',
            'slug' => 'world-news'
        ]);

        Tag::create([
            'name' => 'Official News',
            'slug' => 'official-news'
        ]);

        Tag::create([
            'name' => 'Articles',
            'slug' => 'articles'
        ]);
        
    }
}
