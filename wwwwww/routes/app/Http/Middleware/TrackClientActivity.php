<?php

namespace App\Http\Middleware;

use Closure;

class TrackClientActivity
{
    public function handle($request, Closure $next)
    {
        $client = session()->get('client');
        if ($client) {
            $client->last_activity = now();
$client->save();
        }

        return $next($request);
    }
}
