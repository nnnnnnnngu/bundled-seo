<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleLocation
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        if (!$request->session()->has('location')) {
            $apiData = file_get_contents('http://ip-api.com/json/');
            $apiDataDecoded = json_decode($apiData, 1);
            $country = strtolower($apiDataDecoded['country']);
            session(['location' => $country ?? null]);
        }

        return $next($request);
    }
}
