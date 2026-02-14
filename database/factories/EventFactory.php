<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        $title = fake()->sentence(3);
        $starts = fake()->dateTimeBetween('now', '+3 months');
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $starts->format('Y-m-d') . '-' . fake()->unique()->numberBetween(1, 99),
            'description' => fake()->paragraphs(2, true),
            'location' => fake()->city() . ', ' . fake()->streetAddress(),
            'starts_at' => $starts,
            'ends_at' => (clone $starts)->modify('+2 hours'),
            'published' => true,
        ];
    }
}
