<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepSevenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return[
            'client_id'=>'required',
            'national_number' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'client_id.required'=>'هذا الحقل مطلوب',
            'national_number.required'=>'هذا الحقل مطلوب',
        ];
    }
}
