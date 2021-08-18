<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BotonNeonComponent extends Component
{
    public $ruta1 = "/admin/completa/add";

    public function render()
    {
        $ruta1;
        return view('livewire.boton-neon-component',['ruta1' => $this->ruta1]);
    }
}
