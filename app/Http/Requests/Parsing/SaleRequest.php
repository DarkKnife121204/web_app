<?php

namespace App\Http\Requests\Parsing;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'g_number' => ['required','string'],
            'date' => ['required','date'],
            'last_change_date' => ['required','date'],
            'supplier_article' => ['required','string'],
            'tech_size' => ['required','string'],
            'barcode' => ['required','integer'],
            'total_price' => ['required','string'],
            'discount_percent' => ['required','string'],
            'is_supply' => ['required','boolean'],
            'is_realization' => ['required','boolean'],
            'promo_code_discount' => ['nullable','string'],
            'warehouse_name' => ['required','string'],
            'country_name' => ['required','string'],
            'oblast_okrug_name' => ['nullable','string'],
            'region_name' => ['nullable','string'],
            'income_id' => ['nullable','integer'],
            'sale_id' => ['required','string'],
            'odid' => ['nullable','string'],
            'spp' => ['required','string'],
            'for_pay' => ['required','string'],
            'finished_price' => ['required','string'],
            'price_with_disc' => ['required','string'],
            'nm_id' => ['required','integer'],
            'subject' => ['required','string'],
            'category' => ['required','string'],
            'brand' => ['required','string'],
            'is_storno' => ['nullable','string']
        ];
    }
}
