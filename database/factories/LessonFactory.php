<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(), // Automatically creates a course if none is provided
            'title' => 'Mission: ' . $this->faker->sentence(3),
            'content' => '## Objective' . "\n" . $this->faker->paragraphs(3, true) . "\n" . '```bash' . "\n" . 'ls -la' . "\n" . '```',
            'order_index' => $this->faker->numberBetween(1, 20),
            'xp_reward' => $this->faker->randomElement([100, 150, 200]),
            'coin_reward' => $this->faker->randomElement([25, 50, 75]),
        ];
    }
}
