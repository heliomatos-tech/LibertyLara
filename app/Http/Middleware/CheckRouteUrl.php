<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckRouteUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário já está na página
        if (Session::get('current_url') === url()->current()) {
            return response('', 204);
        }
        // Salva o URL da página atual na sessão
        Session::put('current_url', url()->current());
        return $next($request);
    }
}
