<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AvatarItem>
 */
class AvatarItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->unique()->colorName()." ".$this->faker->word(),
            "description" => $this->faker->sentence(),
            "type" => $this->faker->randomElement(['hat', 'shirt', 'gear', 'background']),
            "cost" => $this->faker->numberBetween(50, 2000),
            "image_path" => "images/avatar-items/".$this->faker->word().".png",
        ];
    }
}
