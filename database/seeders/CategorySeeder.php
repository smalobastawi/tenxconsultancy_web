<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Research',
                'slug' => 'research',
                'description' => 'Research findings, methodologies, and insights from our research team.',
            ],
            [
                'name' => 'Innovation',
                'slug' => 'innovation',
                'description' => 'Innovation news, technological advancements, and creative solutions.',
            ],
            [
                'name' => 'Consultancy',
                'slug' => 'consultancy',
                'description' => 'Business consulting tips, strategies, and industry insights.',
            ],
            [
                'name' => 'Training',
                'slug' => 'training',
                'description' => 'Training programs, capacity building initiatives, and educational content.',
            ],
            [
                'name' => 'Industry News',
                'slug' => 'industry-news',
                'description' => 'Latest news and updates from various industries we serve.',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}