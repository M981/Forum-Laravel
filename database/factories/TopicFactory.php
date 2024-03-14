<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
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
            'content' => $this->faker->paragraphs(nb: 5, asText: true),
            'thread_id' => $this->faker->numberBetween(int1: 1, int2: 10),
            'user_id' => $this->faker->numberBetween(int1: 1, int2: 5),
        ];
    }
}
