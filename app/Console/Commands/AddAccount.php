<?php

namespace App\Console\Commands;

use App\Models\Account;
use Illuminate\Console\Command;

class AddAccount extends Command
{
    protected $signature = 'AddAccount {company_id} {username} {description}';

    protected $description = 'Command add account';

    public function handle()
    {
        Account::create([
            'company_id' => $this->argument('company_id'),
            'username' => $this->argument('username'),
            'description' => $this->argument('description')
        ]);
    }
}
