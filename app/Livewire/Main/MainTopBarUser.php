<?php

namespace App\Livewire\Main;

use Auth;
use Livewire\Component;

class MainTopBarUser extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.main.main-top-bar-user', compact('user'));
    }
}
