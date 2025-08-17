<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            Schema::disableForeignKeyConstraints();
            User::truncate();
            Category::truncate();
            Post::truncate();
            Schema::enableForeignKeyConstraints();

        User::factory()->create([
            'name' => 'Supper Admin',
            'email' => 'admin@admin.com',
            'password'=> bcrypt('password'),
        ]);
        User::factory(10)->create();
        
        Category::factory(10)->create();
        Post::factory(20)->create();
    }
}