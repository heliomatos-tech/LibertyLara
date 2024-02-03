<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShowLoginController extends Controller
{
    public function __invoke()
    {
        //Redireciona para o Dashboard se o usuário está logado
        if (Auth::guard('app')->check()) {
            return redirect()->route('app-dashboard');
        }
        return view('app.login');
    }
}
