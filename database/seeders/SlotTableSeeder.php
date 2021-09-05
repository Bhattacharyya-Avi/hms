<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Seeder;

class SlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slot::Create([
            'slot_name'=>'Slot 1(8:00am - 8:30am)',
            'slot_start'=>'08:00',
            'slot_end'=>'08:30'
        ]);


    }
}
