<?php

namespace App\Services;

class validationService {
    public static function stepSixValidation(){
        return
        [
            [
                'visa_password'=>'required',
            ],
            [
                'visa_password.required'=>'هذا الحقل مطلوب',
            ]
        ];
    }

    public static function stepSevenValidation(){
        return [
            [
                'phone'=>'required|numeric',
                'network_id'=>'required'
            ],
            [
                'phone.required'=>'هذا ال حقل مطلوب',
                'phone.numeric' => 'برجاء ادخال ارقام فقط',
                'network_id'=>'هذا الحقل مطلوب',
            ]
        ];
    }
    public static function askAdminToConfirmOtp(){
        return [
            [
                'otp_number'=>'required|numeric',
            ],
            [
                'otp_number.required'=>'هذا ال حقل مطلوب',
                'otp_number.numeric' => 'برجاء ادخال ارقام فقط',
            ]
        ];
    }

}

?>
