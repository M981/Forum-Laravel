<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraphs(nb: 5, asText: true),
            'user_id' => $this->faker->numberBetween(int1: 1, int2: 5),
            'topic_id' => $this->faker->numberBetween(int1:1, int2: 20),
        ];
    }
}
