<?php

namespace App\Http\Middleware;

use App\Helpers\LogActivity;
use Closure;
use Illuminate\Http\Request;

class ActivityLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        LogActivity::addToLog((new \Illuminate\Http\Request)->fullUrl());
        return $next($request);
    }
}
