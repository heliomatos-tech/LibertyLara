<?php

return [

    // 'defaults' => [
    //     'guard' => 'web',
    //     'passwords' => 'users',
    // ],

    'guards' => [
        'app' => [
            'driver' => 'session',
            'provider' => 'clients', // Corrigido para 'app_usuarios'
        ],
        'sys' => [
            'driver' => 'session',
            'provider' => 'admins', // Corrigido para 'sys_usuarios'
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Models\AppUsuario::class,
        ],
        'clients' => [
            'driver' => 'eloquent',
            'model' => \App\Models\AppUsuario::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => \App\Models\SysUsuario::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];

