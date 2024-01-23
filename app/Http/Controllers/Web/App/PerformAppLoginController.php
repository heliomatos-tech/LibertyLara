<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PerformAppLoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        // dd($credentials);

        $user = \App\Models\AppUsuario::where('email', $credentials['email'])->first();

        // dd($user);


        if ($user && \Illuminate\Support\Facades\Hash::check($credentials['senha'], $user->senha)) {
            Auth::guard('app')->login($user);
            $request->session()->regenerate();
            return redirect()->intended('app');
        }


        // $credentials = $request->only('email', 'senha');
        // Auth::shouldUse('app');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('app-dashboard');
        // }

        return back()->withErrors([
            'email||senha' => 'Usuário e/ou Senha inválidos.',
        ])->onlyInput('email');
    }
}
