<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepNineRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'client_id'=>'required',
            'national_number' =>'required',
            'phone' =>'required',
            'network_id' =>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'phone.required'=>'هذا الحقل مطلوب',
            'network_id.numeric'=>'هذا الحقل مطلوب',
            'network_id.required'=>'هذا الحقل مطلوب'
        ];
    }
}
