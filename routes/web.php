<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\System\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'checkUserProfiles',
])->group(function () {

    Route::prefix('dashboard')->group(function () {

        Route::get('/', DashboardController::class)->name('dashboard');


    });
});