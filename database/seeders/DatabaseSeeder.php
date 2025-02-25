<?php

namespace Database\Seeders;

use App\Models\ApiService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
           CompanySeeder::class,
           AccountSeeder::class,
           TokenSeeder::class
        ]);
    }
}
