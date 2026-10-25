<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepThreeRequest extends FormRequest
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
            'service_id'=>'required',
            'national_number' =>'required|numeric',
        ];
    }

    public function messages(){
       return  [
            'client_id.required' => 'الاسم مطلوب',
            'national_number' => 'الرقم القومى مطلوب',
            'service_id.required' => 'هذا الحقل مطلوب',
            'service_id.numeric' => 'هذا الحقل يجب ان يكون رقم',
       ];
    }
}
