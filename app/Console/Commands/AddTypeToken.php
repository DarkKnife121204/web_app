<?php

namespace App\Console\Commands;

use App\Models\TokenType;
use Illuminate\Console\Command;

class AddTypeToken extends Command
{
    protected $signature = 'AddTypeToken {type} {service_id}';

    protected $description = 'Command add type token';

    public function handle()
    {
        TokenType::create([
            'type' => $this->argument('type'),
            'service_id' => $this->argument('service_id')
        ]);
    }
}
