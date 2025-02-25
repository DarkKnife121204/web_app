<?php

namespace Database\Seeders;

use App\Models\TokenType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokenTypeSeeder extends Seeder
{
    public function run(): void
    {
        TokenType::factory(5)->create();
    }
}
