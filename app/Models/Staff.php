<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    
    protected $table='staffs'; // having some prob to find the table. so told the table name
    // protected $fillable=['employee_name','employee_address','phone_no','email','password','employeetype'];
    protected $guarded=[];
}
