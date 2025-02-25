<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApiServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['ApiService1', 'ApiService2', 'ApiService3', 'ApiService4', 'ApiService5']),
        ];
    }
}
