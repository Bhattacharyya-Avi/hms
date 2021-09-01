<?php

namespace Database\Seeders;

use App\Models\Chamber;
use Illuminate\Database\Seeder;

class ChamberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chamber::create([
            'chamber_number'=>'101',
            'chamber_status'=>'Available'
        ]);
    }
}
