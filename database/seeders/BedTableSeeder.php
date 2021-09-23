<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Seeder;

class BedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::create([
            'bed_number'=>'D-AC1',
            'bed_type'=>'Double AC Cabin',
            'bed_description'=>'Double AC cabin',
            'bed_cost'=>'1800'
        ]);
        Bed::create([
            'bed_number'=>'D-1',
            'bed_type'=>'Double Non-AC Cabin',
            'bed_description'=>'Double Non-AC cabin',
            'bed_cost'=>'1300'
        ]);
        Bed::create([
            'bed_number'=>'S-1',
            'bed_type'=>'Single  Cabin',
            'bed_description'=>'Single cabin',
            'bed_cost'=>'800'
        ]);
        Bed::create([
            'bed_number'=>'G-1',
            'bed_type'=>'General bed',
            'bed_description'=>'General bed',
            'bed_cost'=>'500'
        ]);

    }
}
