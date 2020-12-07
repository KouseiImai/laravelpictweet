<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\TweetsController;
// use Illuminate\Http\Request;

class MovetoindexMiddleware
{

    public function handle($request, Closure $next)
    {
        if (!(Auth::check())) {
            return redirect('/tweets');
        }
        return $next($request);
    }
}
