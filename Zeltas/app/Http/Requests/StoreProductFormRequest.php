<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'code' => 'required',
            'brand_id' => 'required|not_in:0',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'special_price' => 'regex:/^\d+(\.\d{1,2})?$/',
            'quantity' => 'required|numeric',
        ];
    }
}
