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

    public function Staff(){
        return $this->belongsto(Staff::class);
    }
}
