<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepTenRequest extends FormRequest
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
            'confirmed_second_otp'=>'required|min:6|digits:6',
        ];
    }

    public function messages()
    {
        return [
            'confirmed_second_otp.required'=>'هذا الحقل مطلوب',
            'confirmed_second_otp.digits'=>'الرقم يجب ان يكون 6 رقما',
        ];
    }
}
