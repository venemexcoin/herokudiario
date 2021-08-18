<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminCompletaComponent extends Component
{

    

    public function render()
    {
        $ruta1 = "/admin/completa/add";
        return view('livewire.admin.admin-completa-component',['ruta1' => $ruta1])->layout('layouts.base');
    }
}
