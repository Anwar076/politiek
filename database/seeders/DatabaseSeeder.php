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
        $admin = User::factory()->admin()->create([
            'name' => 'Admin',
            'email' => 'admin@samenvoorbarendrecht.nl',
            'password' => bcrypt('password'),
        ]);

        Post::factory(6)->create(['user_id' => $admin->id]);
        Event::factory(5)->create();
    }
}
