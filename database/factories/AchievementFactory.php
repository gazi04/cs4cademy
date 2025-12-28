<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement>
 */
class AchievementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->unique()->words(3, true),
            "description" => $this->faker->sentence(),
            "icon_path" => "icons/achievements/".$this->faker->word().".png",
            "xp_bonus" => $this->faker->randomElement([50, 100, 250, 500]),
        ];
    }
}
