<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'address'           => 'required',
            'phone'             => ['required', 'regex:/^(0|\+84)\d{9,10}$/'],
            'inquiry_details'   => 'nullable',
            'payment_method'    => 'required'
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Please enter your phone number',
            'address.required' => 'Please enter your address',
            'payment_method.required' => 'Please select payment method'
        ];
    }
}
