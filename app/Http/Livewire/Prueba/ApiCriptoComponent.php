<?php

namespace App\Http\Livewire\Prueba;
use Illuminate\Support\Facades\Http;


use Livewire\Component;

class ApiCriptoComponent extends Component
{
  
    public $search;
    
    public function render()
    {
        
        $coinArray = Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        $coins = $coinArray->json();

        return view('livewire.prueba.api-cripto-component',['coins' => $coins])->layout('layouts.base2');
    }
}

                         