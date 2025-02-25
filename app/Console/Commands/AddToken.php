<?php

namespace App\Console\Commands;

use App\Models\Token;
use Illuminate\Console\Command;

class AddToken extends Command
{
    protected $signature = 'AddToken {account_id} {token_type_id} {token_value}';

    protected $description = 'Command add token';

    public function handle()
    {
        Token::create([
            'account_id' => $this->argument('account_id'),
            'token_type_id' => $this->argument('token_type_id'),
            'token_value' => $this->argument('token_value')
        ]);
    }
}
