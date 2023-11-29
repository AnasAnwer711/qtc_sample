<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('clients')->truncate();

        DB::table('clients')->insert(array(
            ['company_name' => 'ABC Corp', 'company_email' => 'info@abccorp.com', 'client_type' => 1, 'date_of_birth' => '1990-05-15', 'company_registration_number' => null, 'contact_name' => 'John Doe', 'contact_email' => 'john.doe@abccorp.com'],
            ['company_name' => 'XYZ Ltd', 'company_email' => 'info@xyzltd.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'ABC123456', 'contact_name' => 'Jane Smith', 'contact_email' => 'jane.smith@xyzltd.com'],
            ['company_name' => 'Example Corp', 'company_email' => 'info@examplecorp.com', 'client_type' => 1, 'date_of_birth' => '1985-08-20', 'company_registration_number' => null, 'contact_name' => 'Alice Johnson', 'contact_email' => 'alice.johnson@examplecorp.com'],
            ['company_name' => 'Test Ltd', 'company_email' => 'info@testltd.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'XYZ789012', 'contact_name' => 'Bob Williams', 'contact_email' => 'bob.williams@testltd.com'],
            ['company_name' => 'ACME Enterprises', 'company_email' => 'info@acme.com', 'client_type' => 1, 'date_of_birth' => '1988-12-10', 'company_registration_number' => null, 'contact_name' => 'Eva Davis', 'contact_email' => 'eva.davis@acme.com'],
            ['company_name' => 'Tech Solutions Inc.', 'company_email' => 'info@techsolutions.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'TSI456789', 'contact_name' => 'Alex Turner', 'contact_email' => 'alex.turner@techsolutions.com'],
            ['company_name' => 'Global Innovations', 'company_email' => 'info@globalinnovations.com', 'client_type' => 1, 'date_of_birth' => '1975-03-25', 'company_registration_number' => null, 'contact_name' => 'Michael Johnson', 'contact_email' => 'michael.johnson@globalinnovations.com'],
            ['company_name' => 'Data Systems Ltd.', 'company_email' => 'info@datasystems.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'DSL987654', 'contact_name' => 'Emma Watson', 'contact_email' => 'emma.watson@datasystems.com'],
            ['company_name' => 'ABC Solutions', 'company_email' => 'info@abcsolutions.com', 'client_type' => 1, 'date_of_birth' => '1982-11-18', 'company_registration_number' => null, 'contact_name' => 'Sophia Turner', 'contact_email' => 'sophia.turner@abcsolutions.com'],
            ['company_name' => 'Quick Services', 'company_email' => 'info@quickservices.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'QS112233', 'contact_name' => 'Charlie Brown', 'contact_email' => 'charlie.brown@quickservices.com'],
            ['company_name' => 'Innovative Tech', 'company_email' => 'info@innovativetech.com', 'client_type' => 1, 'date_of_birth' => '1978-07-30', 'company_registration_number' => null, 'contact_name' => 'David White', 'contact_email' => 'david.white@innovativetech.com'],
            ['company_name' => 'Dynamic Systems', 'company_email' => 'info@dynamicsystems.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'DS445566', 'contact_name' => 'Olivia Green', 'contact_email' => 'olivia.green@dynamicsystems.com'],
            ['company_name' => 'Skyline Enterprises', 'company_email' => 'info@skylineent.com', 'client_type' => 1, 'date_of_birth' => '1989-09-12', 'company_registration_number' => null, 'contact_name' => 'Sophie Clark', 'contact_email' => 'sophie.clark@skylineent.com'],
            ['company_name' => 'Infinite Solutions', 'company_email' => 'info@infinite.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'IS789012', 'contact_name' => 'Matthew Harris', 'contact_email' => 'matthew.harris@infinite.com'],
            ['company_name' => 'Blue Horizon', 'company_email' => 'info@bluehorizon.com', 'client_type' => 1, 'date_of_birth' => '1980-04-05', 'company_registration_number' => null, 'contact_name' => 'Daniel Miller', 'contact_email' => 'daniel.miller@bluehorizon.com'],
            ['company_name' => 'Omega Systems', 'company_email' => 'info@omegasystems.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'OS123456', 'contact_name' => 'Emily Turner', 'contact_email' => 'emily.turner@omegasystems.com'],
            ['company_name' => 'Pioneer Tech', 'company_email' => 'info@pioneertech.com', 'client_type' => 1, 'date_of_birth' => '1976-01-22', 'company_registration_number' => null, 'contact_name' => 'Ava Parker', 'contact_email' => 'ava.parker@pioneertech.com'],
            ['company_name' => 'Data Dynamics', 'company_email' => 'info@datadynamics.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'DD445566', 'contact_name' => 'James Wilson', 'contact_email' => 'james.wilson@datadynamics.com'],
            ['company_name' => 'Sunset Solutions', 'company_email' => 'info@sunset.com', 'client_type' => 1, 'date_of_birth' => '1983-06-14', 'company_registration_number' => null, 'contact_name' => 'Sophie Turner', 'contact_email' => 'sophie.turner@sunset.com'],
            ['company_name' => 'Tech Innovate', 'company_email' => 'info@techinnovate.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'TI112233', 'contact_name' => 'Andrew Brown', 'contact_email' => 'andrew.brown@techinnovate.com'],
            ['company_name' => 'Eagle Enterprises', 'company_email' => 'info@eagleent.com', 'client_type' => 1, 'date_of_birth' => '1977-08-28', 'company_registration_number' => null, 'contact_name' => 'Benjamin Green', 'contact_email' => 'benjamin.green@eagleent.com'],
            ['company_name' => 'Data Solutions Ltd.', 'company_email' => 'info@datasolutions.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'DSL987654', 'contact_name' => 'Olivia Watson', 'contact_email' => 'olivia.watson@datasolutions.com'],
            ['company_name' => 'Alpha Innovations', 'company_email' => 'info@alphainnovations.com', 'client_type' => 1, 'date_of_birth' => '1984-10-08', 'company_registration_number' => null, 'contact_name' => 'Sophia Turner', 'contact_email' => 'sophia.turner@alphainnovations.com'],
            ['company_name' => 'Prime Services', 'company_email' => 'info@primeservices.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'PS445577', 'contact_name' => 'George White', 'contact_email' => 'george.white@primeservices.com'],
            ['company_name' => 'Green Horizon', 'company_email' => 'info@greenhorizon.com', 'client_type' => 1, 'date_of_birth' => '1981-12-03', 'company_registration_number' => null, 'contact_name' => 'Sophie Brown', 'contact_email' => 'sophie.brown@greenhorizon.com'],
            ['company_name' => 'Data Dynamics', 'company_email' => 'info@datadynamics.com', 'client_type' => 2, 'date_of_birth' => null, 'company_registration_number' => 'DD998877', 'contact_name' => 'Chris Smith', 'contact_email' => 'chris.smith@datadynamics.com'],
        ));
    }
}
