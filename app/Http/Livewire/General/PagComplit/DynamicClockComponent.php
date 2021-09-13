<?php

namespace App\Http\Livewire\General\PagComplit;

use Livewire\Component;

class DynamicClockComponent extends Component
{
    public function render()
    {
        return view('livewire.general.pag-complit.dynamic-clock-component')->layout('layouts.blanco');
    }
}
