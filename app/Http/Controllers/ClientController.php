<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientType;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index');
    }

    public function create()
    {
        $types = ClientType::pluck('name', 'id')->toArray();

        return view('clients.create')->with(['types' => $types]);
    }

    public function store(Request $request, $id = null)
    {
        $request->validate([
            'company_name' => 'required|string',
            'company_email' => 'required|email',
            'client_type' => 'required|in:1,2',
            'date_of_birth' => $request->input('client_type') == 1 ? 'required|date' : '',
            'company_registration_number' => $request->input('client_type') == 2 ? 'required|string' : '',
            'contact_name' => 'required|string',
            'contact_email' => 'required|email',
        ]);

        if($id == null){
            $client = new Client();

            $message = 'Client created successfully!';
        }
        else{
            $client = Client::find($id);

            $message = 'Client updated successfully!';
        }
        $client->company_name = $request->company_name;
        $client->company_email = $request->company_email;
        $client->client_type = $request->client_type;
        $client->date_of_birth = $request->client_type == 1 ? $request->date_of_birth : null;
        $client->company_registration_number = $request->client_type == 2 ? $request->company_registration_number : null;
        $client->contact_name = $request->contact_name;
        $client->contact_email = $request->contact_email;
        $client->save();

        return redirect()->route('clients.index')->with('success', $message);
    }



    public function update($id)
    {
        $client = Client::find($id);
        $types = ClientType::pluck('name', 'id')->toArray();

        return view('clients.update')->with(['types' => $types, 'client' => $client]);
    }
}
