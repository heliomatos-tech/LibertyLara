<?php

namespace App\Livewire\Main;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $actual_year = date('Y');
        return view('livewire.main.footer', compact('actual_year'));
    }
}
