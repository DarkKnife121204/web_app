<?php

namespace App\Console\Commands;

use App\Http\Requests\Parsing\IncomeRequest;
use App\Http\Requests\Parsing\OrderRequest;
use App\Http\Requests\Parsing\SaleRequest;
use App\Http\Requests\Parsing\StoreRequest;
use App\Jobs\ProcessData;
use App\Models\Income;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Parsing extends Command
{
    protected $signature = 'parsing';

    protected $description = 'Parsing data from API';

    protected $key;

    protected $api = [
        'http://89.108.115.241:6969/api/stocks' => [
            'model' => Store::class,
            'request' => StoreRequest::class,
            'dateFrom' => 'today'
        ],
        'http://89.108.115.241:6969/api/incomes' => [
            'model' => Income::class,
            'request' => IncomeRequest::class,
            'dateFrom' => '2000-01-01'
        ],
        'http://89.108.115.241:6969/api/orders' => [
            'model' => Order::class,
            'request' => OrderRequest::class,
            'dateFrom' => '2000-01-01'
        ],
        'http://89.108.115.241:6969/api/sales' => [
            'model' => Sale::class,
            'request' => SaleRequest::class,
            'dateFrom' => '2000-01-01'
        ],

    ];

    public function __construct()
    {
        parent::__construct();
        $this->key = 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie';
    }

    public function handle()
    {
        foreach ($this->api as $url => $config)
        {
            if ($config['dateFrom'] === 'today') {
                $dateFrom = Carbon::today()->toDateString();
                $dateTo = '';
            }
            else{
                $dateFrom = '2000-01-01';
                $dateTo = Carbon::today()->toDateString();
            }

            $firstPage = $this->getData($url, 1, $dateFrom, $dateTo);

            $lastPage = $firstPage['meta']['last_page'];

            for ($page = 1; $page <= $lastPage; $page++) {
                $pageData = $this->getData($url, $page, $dateFrom, $dateTo);
                ProcessData::dispatch($pageData['data'],$config['model'],$config['request']);
            }
        }

    }

    public function getData($url, $page , $dateFrom, $dateTo)
    {   do{
                $response = Http::get($url, [
                    'dateFrom' => $dateFrom,
                    'dateTo' => $dateTo,
                    'page' => $page,
                    'key' => $this->key,
                    'limit' => 500
                ]);
        }
        while ($response->status() != 200);
        return $response->json();
    }
}
