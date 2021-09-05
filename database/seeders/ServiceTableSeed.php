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
            'service_description'=>'Oxygen cylinder for critical patient.',
            'service_cost'=>'1000'
        ]);

    }
}
