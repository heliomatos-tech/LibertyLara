<?php

namespace App\Http\Controllers\Web\Sys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $layout = 'sys';
    
    public function __invoke()
    {

        return view('system.dashboard');

    }
}
