<?php

namespace Database\Seeders;

use App\Models\ApiService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiServiceSeeder extends Seeder
{
    public function run(): void
    {
        ApiService::factory(5)->create();
    }
}
