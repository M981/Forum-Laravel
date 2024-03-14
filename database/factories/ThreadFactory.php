<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(nb: 5, asText: true),
            'context' => $this->faker-paragraphs(nb: 1, asText: true),
            'user_id' => $this->faker-numberBetween(int1: 1, int2: 5),
        ];
    }
}
