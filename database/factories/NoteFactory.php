<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'is_pinned' => $this->faker->boolean,
            'bg_color' => $this->faker->randomElement(['bg-white', 'bg-yellow-100', 'bg-green-100', 'bg-blue-100', 'bg-pink-100', 'bg-purple-100'])
        ];
    }
}
