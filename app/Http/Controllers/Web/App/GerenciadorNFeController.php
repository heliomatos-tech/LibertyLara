<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GerenciadorNFeController extends Controller
{

    public function __invoke(Request $request)
    {
        $showLayout = !($request->headers->has('X-Requested-With'));
        return view('app.gerenciador-nfe', compact('showLayout'));
    }
}
