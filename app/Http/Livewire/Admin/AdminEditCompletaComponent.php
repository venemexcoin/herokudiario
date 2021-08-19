<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\PaginasCompletas;


class AdminEditCompletaComponent extends Component
{
    public $complit_id;
    public $name;
    public $rutapag;
    public $rutaimg;
    public $widget1;
    public $widget2;
    public $widget3;
    public $star1;
    public $star2;
    public $star3;
    public $star4;
    public $star5;

    public function mount($complit_id)
    {
        $complit = PaginasCompletas::find($complit_id);
        $this->name = $complit->name;
        $this->rutapag = $complit->rutapag;
        $this->rutaimg = $complit->rutaimg;
        $this->widget1 = $complit->widget1;
        $this->widget2 = $complit->widget2;
        $this->widget3 = $complit->widget3;
        $this->star1   = $complit->star1;
        $this->star2   = $complit->star2;
        $this->star3   = $complit->star3;
        $this->star4   = $complit->star4;
        $this->star5   = $complit->star5;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|string',
            'rutapag' => 'required|string',
            'rutaimg' => 'required|string',
            'widget1' => 'required|string',
            'widget2' => 'required|string',
            'widget3' => 'required|string',
        ]);
    }

    public function updateComplit()
    {
        $this->validate([
            'name' => 'required|string',
            'rutapag' => 'required|string',
            'rutaimg' => 'required|string',
            'widget1' => 'required|string',
            'widget2' => 'required|string',
            'widget3' => 'required|string',
        ]);

        $complit = PaginasCompletas::find($this->complit_id);
        $complit->name = $this->name;
        $complit->rutapag = $this->rutapag;
        $complit->rutaimg = $this->rutaimg;
        $complit->widget1 = $this->widget1;
        $complit->widget2 = $this->widget2;
        $complit->widget3 = $this->widget3;
        $complit->star1   = $this->star1;
        $complit->star2   = $this->star2;
        $complit->star3   = $this->star3;
        $complit->star4   = $this->star4;
        $complit->star5   = $this->star5;
        $complit->save();
        session()->flash('message','Page has been upgrade successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-completa-component')->layout('layouts.base');
    }
}
