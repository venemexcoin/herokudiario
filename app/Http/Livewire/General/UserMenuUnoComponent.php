<?php

namespace App\Http\Livewire\General;

use Livewire\Component;
use App\Models\PaginasCompletas;

class UserMenuUnoComponent extends Component
{
    

    public function render()
    {
        $completas = PaginasCompletas::paginate(3);
        return view('livewire.general.user-menu-uno-component',['completas' => $completas])->layout('layouts.base1');
    }
}
