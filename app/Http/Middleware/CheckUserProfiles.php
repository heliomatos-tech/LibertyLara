<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class CheckUserProfiles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Adicione os perfis que deseja à view
        $UserProfiles = ['gestao'];

        // Compartilhe os perfis com todas as views
        View::share('UserProfiles', $UserProfiles);

        //Compartilhar se é uma requisição AJAX em todas as views
        $showLayout = !($request->headers->has('X-Requested-With'));
        View::share('showLayout', $showLayout);

        return $next($request);
    }
}
