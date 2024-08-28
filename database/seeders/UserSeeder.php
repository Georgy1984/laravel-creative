<?php

namespace Database\Seeders;

use App\Models\Log;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Запись в базу данных
        Log::create(['message' => 'Начало сидера']);

        User::factory(10)->create()->each(function ($user) {
            Log::create(['message' => 'Создан пользователь: ' . $user->id]);
            // Временное отключение создания профиля для изоляции проблемы
            //$user->profile()->create();
        });

        Log::create(['message' => 'Конец сидера']);

    }
}
