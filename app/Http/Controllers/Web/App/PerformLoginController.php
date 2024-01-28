<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PerformLoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        $user = \App\Models\AppUsuario::where('email', $credentials['email'])->first();

        if ($user && \Illuminate\Support\Facades\Hash::check($credentials['senha'], $user->senha)) {
            Auth::guard('app')->login($user);
            $request->session()->regenerate();
            \Cache::forget('menu_options');
            return redirect()->intended('app');
        }

        return back()->withErrors([
            'email||senha' => 'Usuário e/ou Senha inválidos.',
        ])->onlyInput('email');
    }
}
