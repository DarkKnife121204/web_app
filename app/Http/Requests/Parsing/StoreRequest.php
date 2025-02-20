<?php

namespace App\Http\Requests\Parsing;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'date' => ['required', 'date'],
            'last_change_date' => ['nullable', 'string'],
            'supplier_article' => ['nullable', 'string'],
            'tech_size' => ['nullable', 'string'],
            'barcode' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'is_supply' => ['nullable', 'boolean'],
            'is_realization' => ['nullable', 'boolean'],
            'quantity_full' => ['nullable', 'integer'],
            'warehouse_name' => ['required', 'string'],
            'in_way_to_client' => ['nullable', 'integer'],
            'in_way_from_client' => ['nullable', 'integer'],
            'nm_id' => ['required', 'integer'],
            'subject' => ['nullable', 'string'],
            'category' => ['nullable', 'string'],
            'brand' => ['nullable', 'string'],
            'sc_code' => ['nullable', 'integer'],
            'price' => ['required', 'string'],
            'discount' => ['required', 'string']
        ];
    }
}
