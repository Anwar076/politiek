<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = fake()->sentence(4);
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . fake()->unique()->numberBetween(1, 9999),
            'excerpt' => fake()->sentence(12),
            'content' => fake()->paragraphs(4, true),
            'image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=800&q=80',
            'published' => true,
            'published_at' => now(),
            'user_id' => User::factory(),
        ];
    }
}
