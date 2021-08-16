<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Email;

class HomeComponent extends Component
{

    public $email;

    public function updated($fields) 
    {
        $this->validateOnly($fields,[
            'email' => 'required|email'
        ]);
    }

    public function resetInputFields()
    {
        $this->email = '';
    }

    public function sentdEmail()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        $contact = new Email();
        $contact->email = $this->email;
        $contact->save();
        session()->flash('message','Correo enviado satisfactoriamente');
        $this->resetInputFields();
        return redirect()->route('index');
        
    }


    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base');
    }
}
