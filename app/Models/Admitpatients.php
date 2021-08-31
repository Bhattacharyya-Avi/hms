<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admitpatients extends Model
{
    use HasFactory;

    // protected $fillable=['patient_name','doctor_name','patient_email','patient_phone','patient_address','bed_type','bed_number','add_note','admission_date','release_date','admission_time'];
    protected $guarded=[];

    public function admitService()
    {
        return $this->hasMany(Admitpatients_service::class);
    }
}
