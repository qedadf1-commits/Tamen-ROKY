<?php

namespace App\Http\Middleware;

use App\Models\SessionsClint;
use Closure;
use Illuminate\Http\Request;

class SessionsClientsMiddleware
{
    public function handle(Request $request, Closure $next)
    {


        $se = session()->getId();


        SessionsClint::updateOrCreate(
            [
                'session_id' => $se
            ]
            ,[

            'session_id' => $se ,
                'last_seen' => now()

        ]);
        return $next($request);
    }
}
