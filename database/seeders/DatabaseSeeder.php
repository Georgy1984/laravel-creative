<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */



    public function run(): void
    {
        $user = User::firstOrcreate(
           [
               'email' => 'user@ya.com'
           ],
            [
                'name' => 'user',
                'password' => Hash::make('12345')
        ]
        );

        $user->profile()->create();




        $this -> call([

            UserSeeder::class,
            ProfileSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class,

        ]);
        // Создание нескольких постов
//        Post::factory(10)->create()->each(function ($post) {
//
//            Comment::factory(3)->create([
//                'post_id' => $post->id,
//                'profile_id' => Profile::first(),
//            ]);
//        });



    }
}
