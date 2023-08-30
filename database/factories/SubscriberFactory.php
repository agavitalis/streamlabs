<?php

namespace Database\Factories;

use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscriber>
 */
class SubscriberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subscriber::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'subscription_tier' => rand(1,3),
            'is_read' =>fake()->boolean(),
        ];
    }
}

