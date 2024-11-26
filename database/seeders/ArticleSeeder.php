<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ensure a category exists before adding articles
        $category = Category::firstOrCreate(['name' => 'Tech', 'slug' => 'tech']);

        // Ensure tags exist
        $tags = [
            ['name' => 'AI', 'slug' => 'ai'],
            ['name' => 'Google', 'slug' => 'google'],
            ['name' => 'HPC', 'slug' => 'high-performance-computing'],
            ['name' => 'Singularity', 'slug' => 'singularity'],
            ['name' => 'Programming', 'slug' => 'programming']
        ];

        foreach ($tags as $tagData) {
            Tag::firstOrCreate(['slug' => $tagData['slug']], $tagData);
        }

        // Array of sample articles with placeholder text
        $articles = [
            [
                'title' => 'The Future of AI',
                'content' => 'The future of AI is bright. Here are some advancements that are revolutionizing industries. Artificial intelligence is transforming the way we live, work, and interact with technology.',
                'category_id' => $category->id,
            ],
            [
                'title' => 'Google’s New Innovations',
                'content' => 'Google continues to lead in technological innovation. Their new tools and services are shaping the future of tech. These innovations will benefit developers, businesses, and end users alike.',
                'category_id' => $category->id,
            ],
            [
                'title' => 'Understanding High-Performance Computing',
                'content' => 'High-performance computing (HPC) is essential for solving complex problems. It enables faster calculations and simulations. HPC is widely used in fields like science, engineering, and finance.',
                'category_id' => $category->id,
            ],
            [
                'title' => 'The Singularity: A Tech Revolution',
                'content' => 'The Singularity represents a moment when AI surpasses human intelligence. This concept has profound implications for society. It raises questions about ethics, governance, and the future of humanity.',
                'category_id' => $category->id,
            ],
            [
                'title' => 'Mastering Programming Skills',
                'content' => 'Programming is a vital skill in today’s digital world. It involves writing code to create software, websites, and applications. Mastering programming opens up numerous career opportunities.',
                'category_id' => $category->id,
            ],
        ];

        foreach ($articles as $articleData) {
            $article = Article::create($articleData);

            // Attach random tags to each article (example with 2 tags per article)
            $article->tags()->attach(
                Tag::inRandomOrder()->take(2)->pluck('id')->toArray()
            );
        }
    }
}
