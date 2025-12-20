<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(1, 100),
            'description' => $this->faker->text(),
            'img' => fake()->randomElement([
                'https://images.unsplash.com/photo-1569718212165-3a8278d5f624',
                'https://images.unsplash.com/photo-1563612116625-3012372fccce',
                'https://images.unsplash.com/photo-1708782340377-882559d544fb',
            ]),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
