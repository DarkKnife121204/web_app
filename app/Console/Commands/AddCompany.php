<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class AddCompany extends Command
{
    protected $signature = 'AddCompany {title} {address} {description} {number_staff}';

    protected $description = 'Command add company';

    public function handle()
    {
        Company::create([
            'title' => $this->argument('title'),
            'address' => $this->argument('address'),
            'description' => $this->argument('description'),
            'number_staff' => $this->argument('number_staff'),
        ]);
    }
}
