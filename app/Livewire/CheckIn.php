<?php

namespace App\Livewire;

use Livewire\Component;

class CheckIn extends Component
{
    public function render()
    {
        return view('livewire.check-in')
            ->layout('layouts.basic');
    }
}
