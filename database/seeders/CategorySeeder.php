<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Tech News', 'slug' => 'tech-news'],
            ['name' => 'Software Reviews', 'slug' => 'software-reviews'],
            ['name' => 'Hardware Reviews', 'slug' => 'hardware-reviews'],
            ['name' => 'Opinion Pieces', 'slug' => 'opinion-pieces'],
            ['name' => 'Guides', 'slug' => 'guides'],
        ];

        foreach ($categories as $category) {
            // Ensure the category is only created if it doesn't already exist
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                ['name' => $category['name']]
            );
        }
    }
}