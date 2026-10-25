<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Airport extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'airportName',
        'airportCode',
        'country',
        'countryCode',
        'description',
        'jsonData',
    ];

    protected $casts=[
        'jsonData'=>'json'
    ] ;
}
