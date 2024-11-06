<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('tags')->insert([
            ['name' => 'AI', 'slug' => 'ai'],
            ['name' => 'Google', 'slug' => 'google'],
            ['name' => 'HPC', 'slug' => 'high-performance-computing'],
            ['name' => 'Singularity', 'slug' => 'singularity'],
            ['name' => 'Programming', 'slug' => 'programming']
        ]);
        
    }
}
