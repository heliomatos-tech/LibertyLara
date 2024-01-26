<?php

namespace Modules\FilaCirurgica\Architecture\Cirurgia\Validates;

use App\Architecture\Validates;

class DeleteCirurgiaValidate extends Validates
{

    protected $rules = [
        'delete_justification' => 'required|string'
    ];
    protected $messages = [
        'required' => 'O campo :attribute é obrigatório.',
        'string' => 'O campo :attribute é permitido apenas caracteres.'
    ];

}
