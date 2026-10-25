<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepOneRequest extends FormRequest
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
            'first_name'=>'required',
            'serial_number' =>'required|numeric'
        ];
    }

    public function messages(){
       return  [
            'first_name.required' => 'الاسم مطلوب',
            'national_number' => 'الرقم القومى مطلوب',
            'serial_number.required' => 'هذا الحقل مطلوب',
            'serial_number.numeric' => 'هذا الحقل يجب ان يكون رقم',
       ];
    }
}
