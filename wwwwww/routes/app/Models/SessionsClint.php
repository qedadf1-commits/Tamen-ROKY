<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SessionsClint extends Model
{

    protected $fillable=['session_id', 'last_seen'];
    protected $casts = [
        'last_seen' => 'datetime',
    ];
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('last_seen' ,'>=' , now()->subMinutes(1));
    }
}
