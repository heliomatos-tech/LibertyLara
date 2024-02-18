<?php

namespace App\View\Components\Base;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectState extends Component
{
    public $states;
    public $selectedState;

    public function __construct($selectedState = null)
    {
        $this->states = [
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            // ... adicione todos os estados aqui ...
            'SP' => 'São Paulo',
            'RJ' => 'Rio de Janeiro',
            // ...
        ];
        $this->selectedState = $selectedState;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.select-state');
    }
}
