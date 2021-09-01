<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::create([
            'employee_name'=>'Admin',
            'employee_address'=>'Dhaka,Bangladesh',
            'phone_no'=>'01751863894',
            'email'=>'Admin@gmail.com',
            'password'=>bcrypt('17303045'),
            'employeetype'=>'Admin'
        ]);

        Staff::create([
            'employee_name'=>'Asma',
            'employee_address'=>'Dhaka,Bangladesh',
            'phone_no'=>'01751863894',
            'email'=>'asma@gmail.com',
            'password'=>bcrypt('17303045'),
            'employeetype'=>'Nurse'
        ]);

        Staff::create([
            'employee_name'=>'Rahim',
            'employee_address'=>'Dhaka,Bangladesh',
            'phone_no'=>'01737352441',
            'email'=>'rahim@gmail.com',
            'password'=>bcrypt('17303045'),
            'employeetype'=>'Doctor',
            'employee_room'=>'001'
            
        ]);

        Staff::create([
            'employee_name'=>'Karim',
            'employee_address'=>'Dhaka,Bangladesh',
            'phone_no'=>'01621946613',
            'email'=>'karim@gmail.com',
            'password'=>bcrypt('17303045'),
            'employeetype'=>'Accountant'
            
        ]);
    }
}
