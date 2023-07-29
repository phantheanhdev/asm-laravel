<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => 200000,
            'desc' => fake()->text(),
            'img' => 'ao-phong.jpeg',
            'view' => fake()->numberBetween(0, 50),
            'category_id' => fake()->numberBetween(1, 4)
        ];
    }
}
