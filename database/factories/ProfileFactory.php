<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'birthed_at' => fake()->dateTimeBetween('-50 years', '-20 years'),
            'name' => fake()->name(),
            'avatar_path' => fake()->imageUrl(200,200),
            'gender' => fake()->randomElement(['male', 'female']),
            'user_id' => User::factory(),

        ];
    }
}
