<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donation;
use App\Models\Follower;
use App\Models\Subscriber;
use App\Models\Merch_Sale;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
        ->has(Donation::factory()->count(300), 'donations')
        ->has(Follower::factory()->count(300), 'followers')
        ->has(Subscriber::factory()->count(3), 'subscribers')
        ->has(Merch_Sale::factory()->count(3), 'merch_sales')
        ->create();
    }
}
