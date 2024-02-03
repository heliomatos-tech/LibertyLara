<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NfceNewController extends Controller
{
    public function __invoke()
    {
        return view('app.new-nfce');
    }
}
