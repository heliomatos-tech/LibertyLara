<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerNFeController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('app.gerenciador-nfe');
    }
}
