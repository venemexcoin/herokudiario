<?php

namespace App\Http\Livewire\Prueba;

use Livewire\Component;

class HomePruebaComponent extends Component
{
    public function render()
    {
        return view('livewire.prueba.home-prueba-component')->layout('layouts.layatepueba');
    }
}
