<?php

namespace Database\Factories;

use App\Models\Category;
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
            'category_id' => $this->faker->numberBetween(1, Category::count()),
            'name' => [
                'uz' => $this->faker->words(3, true),
                'ru' => $this->faker->words(3, true),
            ],
            'price' => $this->faker->numberBetween(50000, 10000000),
            'description' => [
                'uz' => $this->faker->paragraph(3),
                'ru' => $this->faker->paragraph(4),
            ],
        ];
    }
}
