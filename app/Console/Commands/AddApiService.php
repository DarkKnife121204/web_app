<?php

namespace App\Console\Commands;

use App\Models\ApiService;
use Illuminate\Console\Command;

class AddApiService extends Command
{
    protected $signature = 'AddApiService {name}';

    protected $description = 'Command add api service';

    public function handle()
    {
        ApiService::create($this->argument('name'));
    }
}
