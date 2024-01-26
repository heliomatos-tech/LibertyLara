<?php

namespace App\Http\Controllers\Web\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Realiza o Logout do sistema de admin
     */
    public function __invoke(Request $request)
    {
        Auth::guard('sys')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}