<?php

namespace Database\Factories;
use App\Models\Follower;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follower>
 */
class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Follower::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'is_read' =>fake()->boolean(),
        ];
    }
}

