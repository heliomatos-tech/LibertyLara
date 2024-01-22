<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowAppLoginController extends Controller
{
    public function __invoke()
    {
        return view('auth.app-login');
    }
}
