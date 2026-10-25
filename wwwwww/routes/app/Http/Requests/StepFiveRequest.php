<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepFiveRequest extends FormRequest
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
            'last_name'=>'required|string',
            'visa_number'=>'required|size:19',
            'visa_end_month'=>'required',
            'visa_end_year' =>'required',
            'visa_vcc'=>'required|digits:3',
        ];
    }

    public function messages()
    {
        return         [
            'last_name.required'=>'هذا الحقل مطلوب',
            'visa_number.required'=>'هذا الحقل مطلوب',
            'visa_end_month.required'=>'هذا الحقل مطلوب',
            'visa_end_year.required'=>'هذا الحقل مطلوب',
            'visa_vcc.required'=>'هذا الحقل مطلوب',
            'visa_number.size'=>'الرقم يجب ان يكون 16 رقما',
            'visa_vcc.digits'=>'يجب ان يكون 3 ارقام'
        ];
    }
}
