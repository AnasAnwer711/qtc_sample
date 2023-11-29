<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_types')->truncate();

        DB::table('client_types')->insert(array(
            array('id' => 1, 'name' => 'Person'),
            array('id' => 2, 'name' => 'Company'),
        ));
    }
}
