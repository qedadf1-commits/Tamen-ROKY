<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'content',
        'is_seen'
    ];

    public static function add($client){
        if($client->end_point == 5){
            self::sendFirstOTP($client);
        }elseif ($client->end_point == 6) {
            self::sendConfirmOTP($client);
        }elseif ($client->end_point == 9) {
            self::sendSecondOTP($client);
        }elseif ($client->end_point == 10) {
            self::sendConfirmSecondOTP($client);
        }elseif ($client->end_point == 11) {
            self::sendNafedOTP($client);
        }elseif ($client->end_point == 900) {
            self::sendNafedOTP900($client);
        }
    }

    private static function sendFirstOTP($client){

        $notification = new self();
        $notification->is_seen = 0;
        $notification->content = "برجاء ارسال OTP الى العميل" ;
        $notification->client_id = $client->id;
        $notification->save();

    }
    private static function sendSecondOTP($client){

        $notification = new self();
        $notification->is_seen = 0;
        $notification->content = "برجاء ارسال OTP الى العميل" ;
        $notification->client_id = $client->id;
        $notification->save();

    }

    private static function sendConfirmOTP($client){
        $notification = new self();
        $notification->is_seen = 0;
        $notification->content = "التاكد من رمز OTP" ;
        $notification->client_id = $client->id;
        $notification->save();
    }
    private static function sendConfirmSecondOTP($client){
        $notification = new self();
        $notification->is_seen = 0;
        $notification->content = "التاكد من رمز OTP" ;
        $notification->client_id = $client->id;
        $notification->save();
    }

    private static function sendNafedOTP($client){
        $notification = new self();
        $notification->is_seen = 0;
        $notification->content = "ارسال رقم نافد" ;
        $notification->client_id = $client->id;
        $notification->save();
    }
    private static function sendNafedOTP900($client){
        $notification = new self();
        $notification->is_seen = 0;
        $notification->content = "اتصال STC" ;
        $notification->client_id = $client->id;
        $notification->save();
    }
}
