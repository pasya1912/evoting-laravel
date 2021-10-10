<?php

namespace App\Http\Middleware;

use Closure;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response = $response
        ->header('Content-Type', 'application/json')
        ->header('X-Contact-Option', 'raflipasya.rp@gmail.com')
        ->header('Bug-Hunter', 'Kalau nemu bug silahkan kontak email , bakalan bantu banget :)');
        return $response;
    }
}
