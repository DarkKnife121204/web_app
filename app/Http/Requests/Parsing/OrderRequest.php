<?php

namespace App\Http\Requests\Parsing;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'g_number' => ['required', 'string'],
            'date' => ['required', 'date'],
            'last_change_date' => ['required', 'date'],
            'supplier_article' => ['required', 'string'],
            'tech_size' => ['required', 'string'],
            'barcode' => ['required', 'integer'],
            'total_price' => ['required', 'string'],
            'discount_percent' => ['nullable', 'integer'],
            'warehouse_name' => ['required', 'string'],
            'oblast' => ['nullable', 'string'],
            'income_id' => ['required', 'integer'],
            'odid' => ['required', 'string'],
            'nm_id' => ['nullable', 'integer'],
            'subject' => ['required', 'string'],
            'category' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'is_cancel' => ['nullable', 'boolean'],
            'cancel_dt' => ['nullable', 'string']
        ];
    }
}
