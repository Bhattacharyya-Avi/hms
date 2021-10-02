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
        Slot::Create([
            'slot_name'=>'Slot 2(8:30am - 9:00am)',
            'slot_start'=>'08:30',
            'slot_end'=>'09:00'
        ]);
        Slot::Create([
            'slot_name'=>'Slot 3(9:01am - 9:30am)',
            'slot_start'=>'09:01',
            'slot_end'=>'09:30'
        ]);
        Slot::Create([
            'slot_name'=>'Slot 4(9:31am - 10:00am)',
            'slot_start'=>'09:31',
            'slot_end'=>'10:00'
        ]);

    }
}
