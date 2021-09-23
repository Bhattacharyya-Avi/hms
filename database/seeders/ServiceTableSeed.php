<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'service_name'=>'oxygen',
            'service_description'=>'Oxygen for patient. This is price for one hour.',
            'service_cost'=>'100'
        ]);
        Service::create([
            'service_name'=>'Nebulizer',
            'service_description'=>'Nebulizer for patient. This is price for one hour.',
            'service_cost'=>'100'
        ]);
        Service::create([
            'service_name'=>'Dressing',
            'service_description'=>'Dressing for patients. helps you to keep patients damage area clear. This is price for one hour.',
            'service_cost'=>'100'
        ]);


    }
}
