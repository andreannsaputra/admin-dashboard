<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'company_name' => "TJ Forge, PT",
            'plant' => "1",
            'npwp' => "00.11.22",
            'address' => "Griya Asri 2",
            'postal_code' => "17510",
            'telp' => "021123",
            'fax' => "0211234"
        ]);
    }
}
