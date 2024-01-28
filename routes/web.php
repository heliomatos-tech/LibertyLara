<?php

use Illuminate\Support\Facades\Route;
/**
 * Rotas do Client
 */
use App\Http\Controllers\Web\App\DashboardController;
use App\Http\Controllers\Web\App\ShowLoginController;
use App\Http\Controllers\Web\App\PerformLoginController;
use App\Http\Controllers\Web\App\LogoutController;
use App\Http\Controllers\Web\App\GerenciadorNFeController;
use App\Livewire\App\GerenciadorNfe;
/**
 * Rotas do Admin
 */
use App\Http\Controllers\Web\Sys\DashboardController as SysDashboard;
use App\Http\Controllers\Web\Sys\ShowLoginController as SysShowLogin;
use App\Http\Controllers\Web\Sys\PerformLoginController as SysPerformLogin;
use App\Http\Controllers\Web\Sys\LogoutController as SysLogout;


Route::get('/', function () {
    \Log::info('Rota home-site está sendo chamada');
    return view('welcome');
})->name('home-site')->withoutMiddleware([\App\Http\Middleware\Authenticate::class]);


/**
 * Rotas da Aplicação
 */
Route::group([
    'prefix' => 'app',
    'middleware' => ['AppAuth', 'CheckUserProfiles']

], function () {
    Route::get('/', DashboardController::class)->name('app-dashboard');
    Route::get('/nfe/gerenciador', GerenciadorNfe::class)->name('app-gerenciador-nfe');
    // Rota de login do cliente fora do middleware de autenticação
    Route::get('/login', ShowLoginController::class)->name('app-show-login');
    Route::post('/login', PerformLoginController::class)->name('app-login');
    Route::get('/logout', LogoutController::class)->name('app-logout');
})->withoutMiddleware(['app-show-login', 'app-show-login']);



/**
 * Rotas do Sistema de Administração
 */
Route::group([
    'prefix' => 'sys',
    'middleware' => ['SysAuth', 'CheckSysProfiles']

], function () {
    Route::get('/', SysDashboard::class)->name('sys-dashboard');
});

// Rota de login do admin fora do middleware de autenticação
Route::get('/sys/login', SysShowLogin::class)->name('sys-show-login');
Route::post('/sys/login', SysPerformLogin::class)->name('sys-login');
Route::get('/sys/logout', SysLogout::class)->name('sys-logout');