<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class Create extends Component
{
    public $types;

    public function mount($types)
    {
        $this->types = $types;
    }


    public function render()
    {
        return view('livewire.clients.create');
    }
}
