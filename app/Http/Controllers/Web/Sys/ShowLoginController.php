<?php

namespace App\Http\Controllers\Web\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ShowLoginController extends Controller
{
    public function __invoke()
    {
        //Redireciona para o Dashboard se o usuário está logado
        if (Auth::guard('sys')->check()) {
            return redirect()->route('sys-dashboard');
        }
        return view('auth.sys-login');
    }
}
