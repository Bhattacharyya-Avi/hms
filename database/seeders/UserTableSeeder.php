<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for user account
        User::create([
            'name'=>'Avindra',
            'email'=>'avindra@gmail.com',
            'password'=>bcrypt('12345'),
            'phone_no'=>'01737352441',
            'gender'=>'Male',
            'address'=>'BD'
        ]);
        //for admin account
        User::create([
            'name'=>'Admin',
            'role'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345'),
            'phone_no'=>'01621946613',
            'gender'=>'Male',
            'address'=>'BD'
        ]);
        //for doctor account
        User::create([
            'name'=>'Karim',
            'role'=>'Doctor',
            'email'=>'karim@gmail.com',
            'password'=>bcrypt('12345'),
            'phone_no'=>'01234587649',
            'gender'=>'Male',
            'address'=>'BD',
            'room'=>'001'
        ]);
        //for nurse account
        User::create([
            'name'=>'Sofia',
            'role'=>'Nurse',
            'email'=>'sofia@gmail.com',
            'password'=>bcrypt('12345'),
            'phone_no'=>'01723479238',
            'gender'=>'Female',
            'address'=>'BD'
        ]);
        //for Accountant account
        User::create([
            'name'=>'Rahim',
            'role'=>'Accountant',
            'email'=>'rahim@gmail.com',
            'password'=>bcrypt('12345'),
            'phone_no'=>'01238477643',
            'gender'=>'Male',
            'address'=>'BD'
        ]);
    }
}
