<?php

namespace App\Http\Middleware;

use Closure;
use App\Tweet;

class TweetsallMiddleware
{
    public function handle($request, Closure $next)
    {
        $tweets = Tweet::all();
        $request->merge(['tweets'=>$tweets]);
        return $next($request);
    }
}
