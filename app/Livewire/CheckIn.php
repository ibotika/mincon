<?php

namespace App\Livewire;

use Livewire\Component;

class CheckIn extends Component
{
    public $full_name;

    public function render()
    {
        return view('livewire.check-in')
            ->layout('layouts.basic');
    }

    public function scan($code)
    {
        $array = ['RP1G6P'];

        if(in_array($code, $array)){
            $this->full_name = 'Vahn Marty';
        }
    }
}
