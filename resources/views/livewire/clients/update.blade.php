<div>
    <x-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('clients.store', $client->id) }}">
        @csrf
        <div class="mb-4">
            <x-label for="company_name" :value="__('Company Name')" />
            <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name') ?? $client->company_name" required autofocus />
        </div>
        <div class="mb-4">
            <x-label for="company_email" :value="__('Company Email')" />
            <x-input id="company_email" class="block mt-1 w-full" type="email" name="company_email" :value="old('company_email') ?? $client->company_email" required />
        </div>
        <div class="mb-4">
            <x-label for="client_type" :value="__('Client Type')" />
            <x-select name="client_type" :options="$types" :selected="old('client_type') ?? $client->client_type" class="block mt-1 w-full" placeholder="Client Type" required />
        </div>
        <div class="mb-4" id="date_of_birth_div" @if ($client->client_type == 2) style="display: none" @endif>
            <x-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth') ?? $client->date_of_birth" />
        </div>
        <div class="mb-4" id="company_registration_number_div" @if ($client->client_type == 1) style="display: none" @endif>
            <x-label for="company_registration_number" :value="__('Company Registration Number')" />
            <x-input id="company_registration_number" class="block mt-1 w-full" type="text" name="company_registration_number" :value="old('company_registration_number') ?? $client->company_registration_number" />
        </div>
        <div class="mb-4">
            <x-label for="contact_name" :value="__('Primary Contact Name')" />
            <x-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name') ?? $client->contact_name" required />
        </div>
        <div class="mb-4">
            <x-label for="contact_email" :value="__('Primary Contact Email')" />
            <x-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email') ?? $client->contact_email" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('Update Client') }}
            </x-button>
        </div>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clientTypeSelect = document.getElementById('client_type');
        const dateOfBirthField = document.getElementById('date_of_birth_div');
        const companyRegistrationNumberField = document.getElementById('company_registration_number_div');

        clientTypeSelect.addEventListener('change', function () {
            const clientType = clientTypeSelect.value;

            console.log(clientType);
            if (clientType === '1') {
                console.log(clientType);
                dateOfBirthField.style.display = 'block';
                companyRegistrationNumberField.style.display = 'none';
            } else if (clientType === '2') {
                console.log(clientType);
                dateOfBirthField.style.display = 'none';
                companyRegistrationNumberField.style.display = 'block';
            }
        });
    });
</script>
