<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::updateOrCreate(
            ['email' => 'admin@samenvoorbarendrecht.nl'],
            [
                'name' => 'Admin',
                'password' => 'Samenvoorbarendrecht@2026',
                'is_admin' => true,
            ]
        );

        if (Post::count() === 0) {
            Post::factory(6)->create(['user_id' => $admin->id]);
        }
        if (Event::count() === 0) {
            Event::factory(5)->create();
        }
    }
}
