<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\University;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'nomorhp' => '089876543',
            'is_admin' => '1',
            'alamat' => 'Jalan Raya'
        ]);
        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('12345678'),
            'nomorhp' => '0898765888',
            'is_admin' => '1',
            'alamat' => 'Jalan Raya Rumah'
        ]);

        Category::create([
            'name' => 'Sci-fi',
            'slug' => 'sci-fi',
        ]);
        Category::create([
            'name' => 'Horror',
            'slug' => 'horror',
        ]);
        Category::create([
            'name' => 'Fiction',
            'slug' => 'fiction',
        ]);
        Category::create([
            'name' => 'Non Fiction',
            'slug' => 'non-fiction',
        ]);
        Category::create([
            'name' => 'Drama',
            'slug' => 'drama',
        ]);
        Category::create([
            'name' => 'Action',
            'slug' => 'action',
        ]);
        Post::factory(10)->create();
        
    }
}
