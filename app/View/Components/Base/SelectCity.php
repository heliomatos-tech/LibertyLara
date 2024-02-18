<?php

namespace App\View\Components\Base;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectCity extends Component
{
    public $cities;
    public $selectedCity;

    public function __construct($selectedCity = null)
    {
        $this->cities = [
            // Exemplo de estrutura para cidades de um estado
            'AC' => [
                'Rio Branco',
                'Cruzeiro do Sul',
                // ...
            ],
            // ... adicione todos os estados e suas cidades aqui ...
        ];
        $this->selectedCity = $selectedCity;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.select-city');
    }
}
