<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\TokenType;
use Illuminate\Database\Eloquent\Factories\Factory;

class TokenFactory extends Factory
{
    public function definition(): array
    {
        return [
            'account_id'=>Account::inRandomOrder()->first()->id,
            'token_type_id'=>TokenType::factory()->create(),
            'token_value'=>fake()->randomElement(['BkXLD9UVQPHxexW', 'Qqz0qoApLEElzM', 'jDfsbbkGmZpF82', 'jDfsbbkGmZpF72', 'jDfsbbkGmZpF62', 'jDfsbbkGmZpF52']),
        ];
    }
}
