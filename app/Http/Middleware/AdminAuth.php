<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->path() == '/' && $request->session()->has('username')) {
            return redirect('dashboard');
        }
        if ($request->path() == 'dashboard' && !$request->session()->has('username')) {
            return redirect('/');
        }
        if ($request->path() == 'addcustomer' && !$request->session()->has('username')) {
            return redirect('/');
        }
        return $next($request);
    }
}
