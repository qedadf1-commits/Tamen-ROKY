<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = ['from_booking', 'to_booking', 'type_2', 'from_date', 'to_date', 'type_1' ,'api_data'];
    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'api_data' => 'array',
    ];
}
