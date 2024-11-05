<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(10)->create();

        Category::create([
            'category_name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'red'
        ]);

        Category::create([
            'category_name' => 'Object Oriented Programming',
            'slug' => 'object-oriented-programming',
            'color' => 'green'
        ]);

        Category::create([
            'category_name' => 'Database Management System',
            'slug' => 'database-management-system',
            'color' => 'blue'
        ]);

        Category::create([
            'category_name' => 'AI development',
            'slug' => 'ai-development',
            'color' => 'yellow'
        ]);

        Category::create([
            'category_name' => 'Graphics Design',
            'slug' => 'graphics-design',
            'color' => 'purple'
        ]);
    }
}
