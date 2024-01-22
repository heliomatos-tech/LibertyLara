<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\System\DashboardController;
use App\Http\Controllers\Web\App\ShowAppLoginController;
use App\Http\Controllers\Web\App\PerformAppLoginController;

Route::get('/', function () {
    return view('welcome');
})->name('home-site');


Route::group([
    'prefix' => 'app',
    'middleware' => ['app.auth', 'checkUserProfiles']

], function () {
    Route::get('/', DashboardController::class)->name('app-dashboard');
});

// Rota de login do cliente fora do middleware de autenticação
Route::get('/app/login', ShowAppLoginController::class)->name('app-show-login');
Route::post('/app/login', PerformAppLoginController::class)->name('app-login');
