<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Post::factory(10)->create();

        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "larave@laravel.com",
            "password" => bcrypt("12345"),
        ]);
    }
}
