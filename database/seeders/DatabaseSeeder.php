<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $dafarizqy = User::create([
        //     'name' => 'Dafa Rizqy',
        //     'username' => 'memoriesendx',
        //     'email' => 'dafa@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'When building APIs using Laravel, you will often need to convert your models and relationships to arrays or JSON. Eloquent includes convenient methods for making these conversions, as well as controlling which attributes are included in the serialized representation of your models.'
        // ]);

    //     Post::factory(100)->recycle([
    //         Category::factory(3)->create(),
    //         $dafarizqy,
    //         User::factory(5)->create()

    //         ])->create();
    // }

    $this->call([CategorySeeder::class, UserSeeder::class]);
    Post::factory(100)->recycle([
        Category::all(),
        User::all()
    ])->create();
}

}
