<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        $loggedIn = false;

        if (!$loggedIn) {
            return response('Access Denied. Please login.', 403);
        }

        return $next($request);
    }
}