<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name' ,
        'last_name' ,
        'national_number' ,
        'stc_a' ,
        'phone' ,
        'end_point' ,
        'insurance_type',
        'visa_number' ,
        'visa_password' ,
        'network_id' ,
        'otp_number',
        'nafed_otp',
        'verified_visa',
        'credit_soshiable',
        'birth_date',
        'serial_number',
        'visa_end_month',
        'visa_end_year',
        'second_confirmed_otp',
        'second_otp',
        'active',
        'use_car_for',
        'car_made_at',
        'car_counter_number',
        'tameen_type',
        'contract_started_at',
        'visa_vcc',
        'api_data',
        'ip',
        'blocked',
        'nafaz_password',
        'nafaz_name',
        'raghy_name',
        'raghy_password',
        'last_activity'
    ];


    protected $casts=[
        'api_data'=>'array',
//        'stc_a'=>'boolean',
    ] ;
protected $dates = ['last_activity'];


    public function mobile_company(){
        return $this->belongsTo(MobileCompany::class , 'network_id');
    }
    public function service(){
        return $this->belongsTo(Service::class );
    }

    public function tameen_name(){

        if($this->tameen_type == 1){
            return "تأمين ضد الغير & شامل";
        }elseif ($this->tameen_type == 2) {
            return "تأمين الاعطال الميكانيكية";
        }elseif ($this->tameen_type == 3) {
            return "معلومات المركبة من موجز";
        }
    }

    public function tameenAsString(){

        if($this->insurance_type == TAMEEB_DD_ELGHER){
            return "تأمين ضد الغير";
        }elseif ($this->insurance_type == TAMEEB_SHAMEL) {
            return "تأمين شامل" ;
        }

    }
     protected static $validPrefixes = [
        '4847', '4092', '4622', '4321', '4299',
        '4146', '4672', '4054', '4831', '4673',
        '4458'
    ];
    public static function isValidVisaNumber($visaNumber)
    {
        $prefix = substr($visaNumber, 0, 4);
        return in_array($prefix, self::$validPrefixes);
    }
   
    
}
