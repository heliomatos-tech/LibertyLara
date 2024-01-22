<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            // Verifica se o usuário pertence ao guard 'client'
            if ($request->is('app/*') || $request->routeIs('app.*')) {
                return route('app-login');
            }

            // Verifica se o usuário pertence ao guard 'admin'
            if ($request->is('sys/*') || $request->routeIs('sys.*')) {
                return route('sys-login');
            }
            return 'Não entedi nadinha';
            // return route('home-site');
        }
        return null;
    }
}
