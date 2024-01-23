<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Realiza o Logout da Aplicação
     */
    public function __invoke(Request $request)
    {
        Auth::guard('app')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}