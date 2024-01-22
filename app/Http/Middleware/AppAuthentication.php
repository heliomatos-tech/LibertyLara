<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AppAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($next($request));
        if (Auth::guard('app')->check()) {
            return $next($request);
        }
        // dd('Chamando o login novamente');
        return redirect()->route('app-show-login');
    }
}

