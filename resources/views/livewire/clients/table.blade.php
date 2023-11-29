<div style="margin: 20px">
    <div style="margin-bottom: 10px;">
        @if(session()->has('success'))
            <div class="text-center font-medium text-green-600" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="text-center font-medium text-red-600" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
    </div>
    <div style="text-align: right; margin-bottom: 10px;">
        <button wire:click="createClient" class="btn">Create</button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>S No</th>
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Client Type</th>
            <th>Date of Birth</th>
            <th>Company Registration Number</th>
            <th>Contact Name</th>
            <th>Contact Email(s)</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $row)
            <tr wire:click="updateClient('{{ $row->id }}')" style="cursor: pointer;">
                <td>{{ ($data ->currentpage()-1) * $data ->perpage() + $loop->index + 1 }}</td>
                <td>{{ $row->company_name }}</td>
                <td>{{ $row->company_email }}</td>
                <td>{{ $row->client_type }}</td>
                <td>{{ $row->date_of_birth }}</td>
                <td>{{ $row->company_registration_number }}</td>
                <td>{{ $row->contact_name }}</td>
                <td>{{ $row->contact_email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $data->links() }}
    </div>
</div>


<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('redirect', function (url) {
            window.location.href = url;
        });
    });
</script>
