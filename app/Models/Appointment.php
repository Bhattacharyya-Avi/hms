<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;
    // protected $fillable=['full_name','phone_no','email','doctorname','date','time','appointmentfee'];
    protected $guarded=[];

    public function user(){
        return $this->belongsto(User::class,'doctor_id','id');
    }

    // public function Slot(){
    //     return $this->belongsTo(Slot::class,'id','time');
    // }

    public function Slot(){
        return $this->belongsTo(Slot::class,'time','id');
    }
}
