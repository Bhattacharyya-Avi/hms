<?php

namespace Database\Seeders;

use App\Models\Operation;
use Illuminate\Database\Seeder;

class OperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operation::create([
            'name'=>'Kidny Stone',
            'cost'=>'8500',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Prostate',
            'cost'=>'9000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Bile Duct stone',
            'cost'=>'8500',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Gallbladder',
            'cost'=>'8000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Laparotomi',
            'cost'=>'7500',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Caesar',
            'cost'=>'7000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'TAH',
            'cost'=>'7000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'VH',
            'cost'=>'7000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Ureter Stone',
            'cost'=>'7000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Bladder',
            'cost'=>'7000',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Hernia/ Hydrocele',
            'cost'=>'6500',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Appendicitis',
            'cost'=>'5500',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Normal Delivery ',
            'cost'=>'5800',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'DSD',
            'cost'=>'4800',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Nose, Ears & Throat',
            'cost'=>'4800',
            'status'=>'Available'
        ]);
        Operation::create([
            'name'=>'Orthopedics',
            'cost'=>'6500',
            'status'=>'Available'
        ]);



    }
}
