<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =['name' ,'price_general', 'image' ,'price_against_other'];

    const PATH="images/services/";
    
    function features(){
        return $this->belongsToMany(Feature::class);
    }
}
