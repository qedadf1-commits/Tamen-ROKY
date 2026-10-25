<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepFourRequest extends FormRequest
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
            'total_price'=>'required|numeric',
            'national_number' =>'required',
        ];
    }

    public function messages(){
       return  [
            'client_id.required' => 'الاسم مطلوب',
            'national_number' => 'الرقم القومى مطلوب',
            'total_price.required' => 'هذا الحقل مطلوب',
            'total_price.numeric' => 'هذا الحقل يجب ان يكون رقم',
       ];
    }
}
