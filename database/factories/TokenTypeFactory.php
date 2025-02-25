<?php

namespace Database\Factories;

use App\Models\ApiService;
use Illuminate\Database\Eloquent\Factories\Factory;

class TokenTypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type'=>fake()->randomElement(['bearer','api-key','login', 'password']),
            'service_id'=>ApiService::factory()->create()
        ];
    }
}
