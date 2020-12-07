<?php

namespace App\Http\Middleware;

use Closure;
use App\Tweet;

class TweetfindMiddleware
{
    public function handle($request, Closure $next)
    {
        $tweet = Tweet::find($request->id);
        $request->merge(['tweet'=>$tweet]);
        return $next($request);
    }
}
