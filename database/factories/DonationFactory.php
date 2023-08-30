<?php

namespace Database\Factories;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Donation::class;

    public function definition(): array
    {
        return [
            'amount' => fake()->randomDigitNotNull(),
            'currency' => fake()->currencyCode(),
            'donation_message' => fake()->text(),
            'is_read' =>fake()->boolean(),
        ];
    }
}

