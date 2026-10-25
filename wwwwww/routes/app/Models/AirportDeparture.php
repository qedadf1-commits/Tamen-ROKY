<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AirportDeparture extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'departure_time',
        'arrival_time',
        'date',
        'apiData',
        'departure_iataCode',
    ];

    protected $casts = [
        'date' => 'date',
        'apiData' => 'array',
    ];
}
