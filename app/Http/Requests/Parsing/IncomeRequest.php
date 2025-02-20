<?php

namespace App\Http\Requests\Parsing;

use Illuminate\Foundation\Http\FormRequest;

class IncomeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'income_id' => ['required', 'integer'],
            'number' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'last_change_date' => ['required', 'date'],
            'supplier_article' => ['required', 'string'],
            'tech_size' => ['required', 'string'],
            'barcode' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'total_price' => ['required', 'string'],
            'date_close' => ['required', 'date'],
            'warehouse_name' => ['required', 'string'],
            'nm_id' => ['required', 'integer']
        ];
    }
}
