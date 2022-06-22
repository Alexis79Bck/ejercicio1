<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TopTitulo extends Component
{
    public $titulo ="Ejercicio Nro. 1";
    public function render()
    {
        return view('livewire.top-titulo');
    }
}
