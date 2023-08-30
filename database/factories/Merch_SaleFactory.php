<?php

namespace Database\Factories;

use App\Models\Merch_Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Merch_SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Merch_Sale::class;

    public function definition(): array
    {
        return [
            'item_name' => fake()->company(),
            'amount' => fake()->randomDigitNotNull(),
            'price' => fake()->randomDigitNotNull(),
            'is_read' =>fake()->boolean(),
        ];
    }
}

