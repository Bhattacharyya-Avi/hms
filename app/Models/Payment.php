<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $guarded=[];

    public function appointment(){
        return $this->belongsTo(Appointment::class,'appointment_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'doctor_name','id');
    }

    public function time()
    {
        return $this->belongsTo(Slot::class,'appointment_time','id');
    }
}
