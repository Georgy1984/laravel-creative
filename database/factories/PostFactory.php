<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'title' => fake() -> realTextBetween(7, 100),
    'description' => fake() -> realTextBetween(200, 700),
    'published_at' => fake() -> dateTime,
    'status' => fake() -> numberBetween(1, 3),
    'profile_id' =>  Profile::first()->id,
    'category_id' =>  Category::inRandomOrder()->first()->id,
    'image_path' => fake() ->imageUrl,
    'content' => fake() -> realTextBetween(100, 200),
    'views' => fake() -> numberBetween(1, 100),


        ];
    }
}
