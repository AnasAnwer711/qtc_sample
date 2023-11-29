<?php

namespace App\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public function render()
    {
        $data = Client::select('clients.id', 'company_name', 'company_email', 'ct.name as client_type', 'date_of_birth', 'company_registration_number', 'contact_name', 'contact_email')
            ->join('client_types as ct', 'client_type', 'ct.id')
            ->paginate(10);
        return view('livewire.clients.table', [
            'data' => $data
        ]);
    }

    public function createClient()
    {
        $url = route('clients.create');

        return redirect()->to($url);
    }

    public function updateClient($id)
    {
        $url = route('clients.update', ['id' => $id]);

        return redirect()->to($url);
    }
}
