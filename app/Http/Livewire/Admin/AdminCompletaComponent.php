<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\PaginasCompletas;
use Livewire\WithPagination;

class AdminCompletaComponent extends Component
{

    use WithPagination;

    public function deleteComplit($id)
    {
        $complit = PaginasCompletas::find($id);
        $complit->delete();
        session()->flash('message','Product has been delete successfully!!');
    }
    

    public function render()
    {
        $complits = PaginasCompletas::paginate(3);
        return view('livewire.admin.admin-completa-component',['complits' => $complits])->layout('layouts.base');
    }
}
