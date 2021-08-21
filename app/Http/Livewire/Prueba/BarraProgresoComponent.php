<?php

namespace App\Http\Livewire\Prueba;

use Livewire\Component;

class BarraProgresoComponent extends Component
{
    public function render()
    {
        return view('livewire.prueba.barra-progreso-component')->layout('layouts.daraz');
    }
}
