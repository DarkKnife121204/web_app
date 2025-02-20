<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Validator;

class ProcessData implements ShouldQueue
{
    use Queueable;

    protected $data;
    protected $model;
    protected $request;

    public function __construct($data, $model, $request)
    {
        $this->data = $data;
        $this->model = $model;
        $this->request = $request;
    }

    public function handle(): void
    {
        $validatedData = [];

        foreach ($this->data as $item)
        {
            $request = new $this->request;
            $validated = Validator::make($item, $request->rules());
            $validatedData[] = $validated->validated();
        }
        $this->model::insert($validatedData);
    }
}
