<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Ensure category exists before adding articles
        $category = Category::firstOrCreate(['name' => 'Tech', 'slug' => 'tech']);

        // Sample articles with category association
        $articles = [
            [
                'title' => 'Latest Innovations in AI',
                'content' => 'Lorem ipsum dolor sit amet...',
                'category_id' => $category->id,
                'tags' => ['AI', 'Google', 'High-Performance Computing', 'Singularity'],
            ],
        ];

        foreach ($articles as $articleData) {
            $article = Article::create([
                'title' => $articleData['title'],
                'content' => $articleData['content'],
                'category_id' => $articleData['category_id'],
            ]);

            foreach ($articleData['tags'] as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName, 'slug' => strtolower(str_replace(' ', '-', $tagName))]);
                $article->tags()->attach($tag->id);
            }
        }
    }
}
