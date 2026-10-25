<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepTwoRequest extends FormRequest
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
        return  [
            'client_id'=>'required',
            'national_number' =>'required',
            'insurance_type'=>'required',
            'contract_started_at'=>'required',
            'use_car_for'=>'required',
            'repair_in'=>'required',
            'car_made_at'=>'required|digits:4',
            'estimated_car_value'=>'required|numeric',
            'car_type'=>'required|string|max:200',
        ];
    }

    public function messages()
    {
        return [

            'insurance_type.required' => 'نوع التامين مطلوب',
            'contract_started_at.required' => 'هذا الحقل مطلوب',
            'repair_in.required' => 'هذا الحقل مطلوب',
            'use_car_for.required' => 'هذا الحقل مطلوب',
            'car_made_at.required' => 'هذا الحقل مطلوب',
            'estimated_car_value.required' => 'هذا الحقل مطلوب',
            'car_type.required' => 'هذا الحقل مطلوب',
            'car_type.alpha'=>'يجب ان يكون حروف فقط',
            'estimated_car_value.numeric'=>'يجب ان يكون رقم',
            'car_made_at.digits'=>'سنة الصنع يجب ان تكون اربع ارقام'
            
        ];
    }
}
