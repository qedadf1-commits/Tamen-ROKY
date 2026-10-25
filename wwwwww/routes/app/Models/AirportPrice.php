<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AirportPrice extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'from_airport',
        'to_airport',
        'business_class_start',
        'guest_class_start',
    ];
}
