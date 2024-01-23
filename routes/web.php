<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\System\DashboardController;
use App\Http\Controllers\Web\App\ShowAppLoginController;
use App\Http\Controllers\Web\App\PerformAppLoginController;
use App\Http\Controllers\Web\App\LogoutController;

Route::get('/', function () {
    \Log::info('Rota home-site está sendo chamada');
    return view('welcome');
})->name('home-site')->withoutMiddleware([\App\Http\Middleware\Authenticate::class]);


/**
 * Rotas da Aplicação
 */
Route::group([
    'prefix' => 'app',
    'middleware' => ['AppAuth', 'checkUserProfiles']

], function () {
    Route::get('/', DashboardController::class)->name('app-dashboard');
});

// Rota de login do cliente fora do middleware de autenticação
Route::get('/app/login', ShowAppLoginController::class)->name('app-show-login');
Route::post('/app/login', PerformAppLoginController::class)->name('app-login');
Route::get('/app/logout', LogoutController::class)->name('app-logout');

/**
 * Rotas do Sistema de Administração
 */