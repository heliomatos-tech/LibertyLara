<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class CheckSysProfiles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Adicione os perfis que deseja à view
        $SysUserProfiles = ['view', 'editor', 'master', 'super'];

        // Compartilhe os perfis com todas as views
        View::share('SysUserProfiles', $SysUserProfiles);

        return $next($request);
    }
}
