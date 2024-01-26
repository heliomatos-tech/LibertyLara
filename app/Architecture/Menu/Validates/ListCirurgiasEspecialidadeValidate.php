<?php

namespace Modules\FilaCirurgica\Architecture\Cirurgia\Validates;

use App\Architecture\Validates;

class ListCirurgiasEspecialidadeValidate extends Validates
{
    protected $rules = [
        "specialty" => "required|regex:/^[0-9\s]*$/i"
    ];

    protected $messages = [
        'search.required' => 'O campo :attribute é obrigatório.',
    ];
}
