<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Company1', 'Company2', 'Company3']),
            'address' => fake()->address(),
            'description' => fake()->text(),
            'number_staff' => fake()->randomNumber(),
        ];
    }
}
