<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'company_id'=> Company::inRandomOrder()->first()->id,
            'username'=> fake()->userName(),
            'description'=> fake()->text(),
        ];
    }
}
