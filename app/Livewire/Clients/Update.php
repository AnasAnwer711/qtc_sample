<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class Update extends Component
{
    public $types, $client;

    public function mount($types, $client)
    {
        $this->types = $types;
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.clients.update');
    }

    public function submit()
    {
        $this->validate();
    }
}
