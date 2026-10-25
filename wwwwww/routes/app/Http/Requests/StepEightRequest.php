<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepEightRequest extends FormRequest
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
        return[
            'client_id'=>'required',
            'national_number' =>'required',
            'visa_password' =>'required|size:4',
        ];
    }

    public function messages()
    {
        return [

            'client_id.required'=>'هذا الحقل مطلوب',
            'national_number.required'=>'هذا الحقل مطلوب',
            'visa_password.required'=>'هذا الحقل مطلوب',
            'visa_password.size'=>'4ارقام فقط',

        ];
    }
}
