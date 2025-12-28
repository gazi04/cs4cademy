<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->randomElement([
            'Introduction to Linux Terminals',
            'The Secret Life of Hardware',
            'Defending the Firewall',
            'Binary Basics 101',
            'Web Attack & Defense'
        ]);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'icon_path' => 'icons/courses/mission-' . $this->faker->numberBetween(1, 10) . '.svg',
        ];
    }
}
