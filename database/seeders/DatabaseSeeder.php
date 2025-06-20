<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create([
            "name"=> "Test User",
            "email"=> "testuser@example.com"
        ]);
        $categories = [
            'Technology',
            'Health',
            'Lifestyle',
            'Education',
            'Travel',
,
            'Personal Development',
            'Relationships',
            'Spirituality',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        Post::factory(100)->create();

        // you can also use rthe s=custom made seeder
        // $this->call(PostSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
