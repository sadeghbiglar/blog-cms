<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password'),
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => 'اولین پست تستی',
            'content' => 'این یک پست تستی برای بررسی سیستم وبلاگ است.',
            'slug' => Str::slug('اولین پست تستی'),
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => 'دومین پست تستی',
            'content' => 'این پست دوم برای تست بیشتر است.',
            'slug' => Str::slug('دومین پست تستی'),
        ]);
    }
}