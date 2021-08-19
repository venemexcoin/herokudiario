<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\PaginasCompletas;

class AdminAddCompletaComponent extends Component
{
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

    public function resetInputFields()
    {
        $this->name = "";
        $this->rutapag = "";
        $this->rutaimg = "";
        $this->widget1 = "";
        $this->widget2 = "";
        $this->widget3 = "";
        $this->star1 = "";
        $this->star2 = "";
        $this->star3 = "";
        $this->star4 = "";
        $this->star5 = "";
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

    public function addPag()
    {
        $this->validate([
            'name' => 'required|string',
            'rutapag' => 'required|string',
            'rutaimg' => 'required|string',
            'widget1' => 'required|string',
            'widget2' => 'required|string',
            'widget3' => 'required|string',

        ]);
        $addPag = new PaginasCompletas();
        $addPag->name = $this->name;
        $addPag->rutapag = $this->rutapag;
        $addPag->rutaimg = $this->rutaimg;
        $addPag->widget1 = $this->widget1;
        $addPag->widget2 = $this->widget2;
        $addPag->widget3 = $this->widget3;
        $addPag->star1 = $this->star1;
        $addPag->star2 = $this->star2;
        $addPag->star3 = $this->star3;
        $addPag->star4 = $this->star4;
        $addPag->star5 = $this->star5;
        $addPag->save();
        session()->flash('message','addPage has been created successfully!');
        $this->resetInputFields();
        return redirect()->route('admin.completa');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-completa-component')->layout('layouts.base');
    }
}
