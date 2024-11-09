<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'product_id' => Str::uuid(), // Unique identifier
            'name' => $this->faker->words(3, true), // Random product name
            'description' => $this->faker->sentence(), // Random description
            'price' => $this->faker->randomFloat(2, 10, 500), // Price between 10 and 500
            'stock' => $this->faker->numberBetween(1, 100), // Stock between 1 and 100
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // Random image URL
        ];
    }
}




