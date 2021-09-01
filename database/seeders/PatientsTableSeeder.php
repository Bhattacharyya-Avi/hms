<?php

namespace Database\Seeders;

use App\Models\patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'name'=>'Avindra Bhattacharyya',
            'address'=>'Dhaka,BD',
            'phone_no'=>'01621946613',
            'gender'=>'male',
            'email'=>'17303045@iubat.edu',
            'password'=>bcrypt('17303045'),
            'confirm_password'=>bcrypt('17303045')
        ]);
    }
}
