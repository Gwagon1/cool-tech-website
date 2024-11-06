<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('categories')->insert([
            ['name' => 'Tech News', 'slug' => 'tech-news'],
            ['name' => 'Software Reviews', 'slug' => 'software-reviews'],
            ['name' => 'Hardware Reviews', 'slug' => 'hardware-reviews'],
            ['name' => 'Opinion Pieces', 'slug' => 'opinion-pieces'],
            ['name' => 'Guides', 'slug' => 'guides']
        ]);
        
    }
}
