<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|max:100',
            'price'         => 'required|integer',
            'image'         => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'sale'          => 'nullable|integer',
            'quantity'      => 'required|integer',
            'category_id'   => 'required|integer',
            'colors'        => 'required'
        ];
    }
}
