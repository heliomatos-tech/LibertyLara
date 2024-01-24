<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShowAppLoginController extends Controller
{
    public function __invoke()
    {
        if (Auth::guard('app')->check()) {
            return redirect()->route('app-dashboard');
        }

        return view('auth.app-login');
    }
}
