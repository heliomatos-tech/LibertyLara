<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SysUsuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'sys_usuario';


    protected $fillable = [
        'nome',
        'email',
        'senha',
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    // Nome do campo de senha na tabela
    public function getAuthPassword()
    {
        return $this->senha;
    }
}

